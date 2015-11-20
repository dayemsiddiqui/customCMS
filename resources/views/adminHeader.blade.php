<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Intl Counselling - Admin Panel</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style-responsive.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/js/gritter/css/jquery.gritter.css')}}" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="{{asset('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>
      <script src="{{asset('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')}}"></script>
    <![endif]-->
  </head>

   <body>

     <section id="container" >
         <!-- **********************************************************************************************************************************************************
         TOP BAR CONTENT & NOTIFICATIONS
         *********************************************************************************************************************************************************** -->
         <!--header start-->
         <header class="header black-bg">
                 <div class="sidebar-toggle-box">
                     <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
                 </div>
               <!--logo start-->
               <a href="index.html" class="logo"><b>Admin Panel - IntlCounselling</b></a>
               <!--logo end-->

               <div class="top-menu">
               	<ul class="nav pull-right top-menu">
                       <li><a class="logout" href="{{url('/auth/logout')}}">Logout</a></li>
                        <li><a class="logout"  href="javascript:" onclick="window.open('{{url('/news')}}');"  >Preview Website</a></li>
               	</ul>
               </div>
           </header>
         <!--header end-->

         <!-- **********************************************************************************************************************************************************
         MAIN SIDEBAR MENU
         *********************************************************************************************************************************************************** -->
         <!--sidebar start-->
         <aside>
             <div id="sidebar"  class="nav-collapse ">
                 <!-- sidebar menu start-->
                 <ul class="sidebar-menu" id="nav-accordion">

                 	  <p class="centered"><img src="{{asset('assets/img/ui-sam.jpg')}}" class="img-circle" width="60"></p>
                 	  <h5 class="centered">Intl Counselling</h5>

                     <li class="mt">
                         <a class="active" href="{{url('/admin')}}">
                             <i class="fa fa-dashboard"></i>
                             <span>Dashboard</span>
                         </a>
                     </li>




                     <li class="sub-menu">
                         <a  href="{{url('news/create')}}" >
                             <i class="fa fa-book"></i>
                             <span>Manage Posts</span>
                         </a>

                     </li>
                     <li class="sub-menu">
                         <a href="{{url('/newMember')}}" >
                             <i class="fa fa-tasks"></i>
                             <span>Manage Members</span>
                         </a>

                     </li>


                 </ul>
                 <!-- sidebar menu end-->
             </div>
         </aside>
         <!--sidebar end-->
