<?php



class Mybarcode_model extends CI_Model{



	 function __construct()

    {

		parent::__construct();

	}



	public function getAll(){

		$query = $this->db->get('barcode_sku');

		return $query->result(); 

	}

   

   

	public function getOne($sku){
 
		$ans = 0; 
		$sku = str_replace('_','_',$sku); 
		$query = $this->db->query("SELECT * FROM barcode_sku WHERE sku = \"$sku\"");
		$res = $query->result();
		$row = $res[0];
		$ans =  $row->quantity;
		return $ans;

	}



	public function addOne($sku , $quantity){

	$data = array(

	'sku' => $sku,

	'quantity' => $quantity

   	);

		$this->db->insert('barcode_sku', $data);

	}



	public function delete($id){

		$this->db->delete('barcode_sku', array('id' => $id));

	}

}

?>