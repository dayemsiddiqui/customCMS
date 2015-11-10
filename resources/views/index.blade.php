
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1">
    <!-- ================================================= -->
    <!-- PLACE YOUR PAGE TITLE BELOW -->
    <!-- ================================================= -->
    <title>Intl Counselling</title>

    <!-- ================================================= -->
    <!-- LINK TO BOOTSTRAP AND CUSTOM CSS -->
    <!-- ================================================= -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('libs/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/owl.transitions.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/faq.css') }}">

</head>
<body>
<div class="wrapper">
<div class="row">
        <img src="{{ asset('img/tagline.png') }}" class="taglineHead2">
        </div>
    <div class="up">
        <span class="fa fa-arrow-up fa-3x" id="arrow" style="background:#2980b9; padding:5px; float:right;"></span>
    </div>
    <div class="row topbar">
        <nav>
                  <img src="{{ asset('img/logo.png') }}" class="navLogo">
                  <a href="{{ url('/mydoc') }}" style="padding-right: 40px;">MyProfile</a>
                  <a href="{{ url('/faq') }}">FAQ</a>
                  <a href="{{ url('/contact') }}">Contact Us</a>
                  <a href="{{ url('/news') }}">News</a>
                  <a href="{{ url('/services') }}" id="service">Services
                    <div class="dropdown" style="display:none;">
                    <div style="text-align: center;">
                        {{--<div class="row demo1">DEMO 1</div>--}}
                        {{--<div class="row demo2">DEMO 2</div>--}}
                    </div>
                    
                  </div></a>
                  <a href="{{ url('/about2') }}">The Team</a>
                  <a href="{{ url('/') }}">Home</a>


        </nav>
    </div>

  <div class="row topBarDropDown">

  <div class="row" style="background:#01a3b6; ">

  </div>

                    <div class=" row customDropNav">
                    <img src="{{ asset('img/logo.png') }}" class="navLogo">

                    <span class="fa fa-bars fa-3x" style="padding-top: 1.5%; margin-left: -100px;"></span><br/><br/>
                    <div class="dropSubMenu">
                    <br/>
                        <a href="{{ url('/') }}"><div class="row submenu"> Home</div></a>
                        <a href="{{ url('/about2') }}"><div class=" row submenu">The Team</div></a>
                        <a href="{{ url('/services') }}" id="service"><div class="row submenu">Services</div></a>
                        <a href="{{ url('/news') }}"><div class="row submenu">News</div></a>
                        <a href="{{ url('/contact') }}"><div class="row submenu">Contact Us</div></a>
                        <a href="{{ url('/faq') }}"><div class="row submenu">FAQ</div></a>
                        <a href="{{ url('/mydoc') }}"><div class="row submenu">MyProfile</div></a>
                    </div>

                  </div>





    </div>



    @yield('central')

<!-- 
================================
        FOOTER
================================ -->
    <footer>
        <div class="row footerControl">

         <div class="col-md-4 location">
            <br><br>



            <span  style = "color:white;" >
            <h3>Our Location</h3>
            <h5>International Counselling <br/>& Psychology Centre</h5>
            <h5>360 Orchard Road</h5>
            <h5>#06-08 International Building</h5>
            <h5>Singapore 238869</h5>
            <h5>Phone +65 6734 6463</h5>
            <h5><i class="fa fa-envelope" style="padding-right:0px;"></i> connect@intlcounselling.com</h5>

            </span>



         </div>
          <br><br>
         <div class="col-md-4 sitelookup ">
             <span style="color:white; padding: 0;">
                           <h3>Site Lookup</h3>
                           <ul style=" list-style-type: none;padding: 0;">
                           <li style="border-bottom: solid 1px grey;"><h5><i class="fa fa-arrow-right" style="padding-right:10px; color:#2d4e93"></i><a href="{{ url('/') }}" style="color:white;">Home</a></h5>
                           <li style="border-bottom: solid 1px grey;">
                           <h5><i class="fa fa-arrow-right" style="padding-right:10px; color:#2d4e93"></i><a href="{{ url('/about2') }}" style="color:white;">The Team</a></h5>
                           </li>
                           <li style="border-bottom: solid 1px grey;">
                              <h5><i class="fa fa-arrow-right" style="padding-right:10px; color:#2d4e93"></i><a href="{{ url('/services') }}" style="color:white;">Services</a></h5>
                              </li>
                           <li style="border-bottom: solid 1px grey;">
                              <h5><i class="fa fa-arrow-right" style="padding-right:10px; color:#2d4e93"></i><a href="{{ url('/news') }}" style="color:white;">News</a></h5>
                              </li>
                           <li style="border-bottom: solid 1px grey;">
                              <h5><i class="fa fa-arrow-right" style="padding-right:10px; color:#2d4e93"></i><a href="{{ url('/contact') }}" style="color:white;">Contact Us</a></h5>
                              </li>
                            <li style="border-bottom: solid 1px grey;">
                             <h5><i class="fa fa-arrow-right" style="padding-right:10px; color:#2d4e93"></i><a href="{{ url('/faq') }}" style="color:white;">FAQ</a></h5>
                             </li>
                           <li style="border-bottom: solid 1px grey;">
                            <h5><i class="fa fa-arrow-right" style="padding-right:10px; color:#2d4e93"></i><a href="{{ url('/mydoc') }}" style="color:white;">MyProfile</a></h5>
                            </li>
                           </ul>


             </span>
            <br><br><br/>
        </div>
         <div class="col-md-4 thirdfooter">
              <span style="color:white;">
              <h3>Operating Hours</h3>
              <p>Counselling hours are available 7 days a week including some evenings. Administrative staff are available Monday, Tuesday, and Thursday 9:00a.m. to 5:00p.m.</p>
              </span>
                 <br>
                        <span style="margin-top:25px; color:white;">
                         <h3>Follow Us</h3>
                        <a style="text-decoration: none; color: #ffffff;" href="https://www.facebook.com/intlcounselling/"><h4><i class="fa fa-facebook" style="padding-right:10px;"></i>/intlcounselling</h4></a>
                        <a style="text-decoration: none; color: #ffffff;" href="https://www.linkedin.com/grp/home?gid=7003504"><h4><i class="fa fa-linkedin" style="padding-right:10px;"></i>/intlcounselling</h4></a>
                        <a style="text-decoration: none; color: #ffffff;" href="https://twitter.com/intlcounselling"><h4><i class="fa fa-twitter" style="padding-right:10px;"></i>@intlcounselling</h4></a>

                        </span>


         </div>
        </div>

    </footer>
</div>



<!-- ================================================= -->
<!-- LINK TO BOOTSTRAP JQUERY AND CUSTOM JAVASCRIPT FILE -->
<!-- ================================================= -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('libs/owl.carousel.min.js') }}"></script>
@yield('additionalFooter')
<script type="text/javascript" src="{{ asset('scripts/scripts.js') }}"></script>

</body>
</html>
