<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



        require_once('mainfiles/barcode.class.php');

        require_once('RandomStringGenerator.php'); 

        require_once('Classes/PHPExcel.php');



class Purchaselogic {



 private $CI;



    public function __construct()

    {

        $this->CI =& get_instance();

        $this->CI->load->model('orders_model');

        $this->CI->load->model('upccode_model');

        $this->CI->load->model('user_model');

        $this->CI->load->library("emailhelper");

        $this->CI->load->model('Mybarcode_model');         

    }



    public function purchase(){

        $payment_status = $_POST['payment_status'];

        $item_name = $_POST['item_name'];

        $item_number = $_POST['item_number'];

        $payment_date = strtotime($_POST['payment_date']);

        $payment_amount = $_POST['mc_gross'];

        $payment_currency = $_POST['mc_currency'];

        $txn_id = $_POST['txn_id'];

        $receiver_email = $_POST['receiver_email'];

        $payer_email = $_POST['payer_email'];

        

        $item_number = $_POST['item_number'];

        $q1 = $_POST['quantity'];

        if (isset($item_number)) {
            $numberOfBarCodes = $this->CI->Mybarcode_model->getOne($item_number);
        }else{
            exit("item_number is not set");
        }
        $quantity = $q1*$numberOfBarCodes;
        if($quantity == 0){
             exit("quantity is 0");
        }


      //  $accessCode= md5(uniqid(rand(), true));

        $generator = new RandomStringGenerator; 

        $tokenLength = 12; 

        $accessCode = $generator->generate($tokenLength);

        $adminEmail = $this->CI->user_model->getAdminEmailAddress();

        $transactionIdAlreadyPresent = $this->CI->orders_model->isTransactionIdAlreadyPresent($txn_id);

        if($transactionIdAlreadyPresent){

            $this->SendEmailToAdminAboutDuplicateTransactionID($txn_id, $payer_email, $adminEmail);

            exit(0);

        }

        $id = $this->CI->orders_model->save($payment_status, $payment_date, $payment_amount, $txn_id, $payer_email, $quantity,$accessCode );



        if($payment_status == 'Completed') {

            $this->createZipFile( $id,$payer_email,$quantity);

            $this->SendEmailToDownloadFile($payer_email, $id, $accessCode);

        } else if($payment_status == 'Denied' || $payment_status == 'Failed' || $payment_status == 'Refunded' || $payment_status == 'Reversed' || $payment_status == 'Voided')

        {

            //Do something

        }

        else if($payment_status == 'In-Progress' || $payment_status == 'Pending' || $payment_status == 'Processed') {

            //Do something

        } else if($payment_status == 'Canceled_Reversal') {

            //Do something

        }



        

 

 }



        public function SendEmailToAdminAboutDuplicateTransactionID($txn_id, $buyer_email, $adminEmail){



            $msg="Someone is trying to reuse Paypal TransactionID $txn_id. The buyer email is $buyer_email. No order was created and no email was sent to him.";

            $subject="SpeedyUPCCodes possible security attach.";



            $this->CI->emailhelper->send_email_to_user($msg, $subject, $adminEmail );

             

        }



        public function SendEmailToAdminAboutError($order_id, $buyer_email, $quantity, $adminEmail){



            $msg="An order has been placed at SpeedyUPC with order Id = $order_id. The buyer email address is $buyer_email and he has purchased $quantity. But the database doesn't contain enough ununsed codes. Please load more codes and entertain this buyer manually. ";

            $subject="SpeedyUPCCodes Critical error.";



            $this->CI->emailhelper->send_email_to_user($msg, $subject, $adminEmail );

             

        }



        public function markAsUndelivered($order_id){

            $this->CI->orders_model->markAsUndelivered($order_id);

        }





    public function createZipFile( $order_id, $buyer_email, $quantity){

        $adminEmail = $this->CI->user_model->getAdminEmailAddress();



        $numberOfUnusedCodes = $this->CI->upccode_model->getNumberOfUnusedCodes();



        if($numberOfUnusedCodes < $quantity){

            $this->SendEmailToAdminAboutError($order_id, $buyer_email, $quantity, $adminEmail);

            $this->markAsUndelivered($order_id);

            exit(0);

        }





        $result= $this->CI->upccode_model->fetchCodes($order_id, $buyer_email, $quantity, $adminEmail);

        $objPHPExcel = $this->createExcelFile();



        $csvFileName = "barcodes" .$order_id. ".xlsx";

        $csvFileNameFull = "../../zipfiles/".$csvFileName;

            $zip = new ZipArchive();

            $filePath = '../../zipfiles/barcodes'.$order_id.".zip";

            if(! $zip->open($filePath, ZipArchive::CREATE) ){

                die ("Could not open archive");

            }



            $i=2;

            foreach($result as $result_data)

            {   

                $codeNum=$result_data->code;

                $this->CI->upccode_model->markAsRead($result_data, $buyer_email) ;

                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$i, $codeNum);

                $zip->addFile("../../codes/".$codeNum.".jpg", $codeNum.".jpg");

                $i = $i + 1;

            }

            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');

            $objWriter->save($csvFileNameFull);

            $objPHPExcel->disconnectWorksheets();

            unset($objWriter, $objPHPExcel);





            $zip->addFile($csvFileNameFull, $csvFileName);

            $zip->close();





             foreach($result as $result_data)

            {   

                $codeNum=$result_data->code;

                unlink ("../../codes/".$codeNum.".jpg");

            }

    }





    public function createExcelFile(){



        $objPHPExcel = new PHPExcel();

        $objPHPExcel->getProperties()->setCreator("Stephen Perreira")

                                     ->setLastModifiedBy("Stephen Perreira")

                                     ->setTitle("Office 2007 XLSX   Document")

                                     ->setSubject("Office 2007 XLSX   Document")

                                     ->setDescription("Speedy UPC Codes");



        $objPHPExcel->getActiveSheet()

        ->getStyle('A1:A10000')

        ->getNumberFormat()

        ->setFormatCode('000000000000');



     $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);



    // Set active sheet index to the first sheet, so Excel opens this as the first sheet

    $objPHPExcel->setActiveSheetIndex(0);

         // Rename worksheet

    $objPHPExcel->getActiveSheet()->setTitle('Speedy UPC Codes');









     return $objPHPExcel;

    }





    public function SendEmailToDownloadFile($email, $id, $accessCode ){

        $msg = "Hello, <br><br> Thank you for ordering from ProductBar Codes! To download your order please click on the link below and enter your unique access code. <br/><br/><a href='https://productbarcodes.com/admin/api/Download/downloadCodes?buyer_email=$email&order_id=$id'> https://productbarcodes.com/admin/api/Download/downloadCodes?buyer_email=$email&order_id=$id </a>         <br/><br/>Access code: $accessCode <br/><br/>Sincerely,  <br/><br/> Stephen Perreira <br/>Sales Manager  <br/>Product Bar Codes ";

        $subject="Your Product Bar Codes Order";

        $this->CI->emailhelper->send_email_to_user($msg, $subject, $email); 

         $this->CI->emailhelper->send_email_to_user("A new order has been successully placed at speedyupccodes.com, the buyer email is <br><br> <b> $email </b> <br/><br/> and order id is <br/><br/><b> $id </b>", "A New order has been placed", $this->CI->user_model->getAdminEmailAddress()); 

    }



    public function invalidPurchase($req){

        $msg="An invalid purahse request is recieved.<br> $req";

        $subject="Invalid Purchase request";

        $this->CI->emailhelper->send_email_to_user($msg, $subject, $this->CI->user_model->getAdminEmailAddress());

    }

       

   

   public function purchase1(){

        $accessCode= md5(uniqid(rand(), true));

        $id = $this->CI->orders_model->save("completed", "12/12/2015", 10, 1234, "swardi2001@hotmail.com", 100,$accessCode );

        $this->createZipFile( $id,"swardi2001@hotmail.com",100);

        $this->SendEmailToDownloadFile("swardi2001@hotmail.com", $id, $accessCode);

 }





}