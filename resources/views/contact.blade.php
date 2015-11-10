@extends('index')

@section('central')
    <div class="row">
            <img src="{{ asset('img/tagline.png') }}" class="taglineHead">
            </div>
    <div class="row contactChunk">
        <div class="row chunkie">
            <div class="col-md-6">
                <div style="margin-left:50px;">
                      <div class="col-md-6">
                      <h1 >Contact Us </h1>
                      <h5 class="contactSubHead" style="padding-top: 10px;" >Address</h5>
                      <p>International Counselling<br> & Psychology Centre <br/>
                        360 Orchard Road <br>
                        #06-08 International Building <br/>
                        Singapore 
                        238869</p>
                      <p><strong>Phone</strong> +65 6734 6463</p>
                      <p><strong>Fax</strong> +65 6443 7713</p>
                      <p  style=""><strong>Email</strong> connect@intlcounselling.com</p>

                        <br><br>
                        <p><a href="https://www.facebook.com/intlcounselling"><span class="fa fa-facebook fa-3x" style="padding-right:25px; color:#67C9E0;"></span></a><a href="https://www.linkedin.com/grp/home?gid=7003504"><span class="fa fa-linkedin fa-3x" style="padding-right:25px; color:#67C9E0;"></span></a><a href="https://twitter.com/intlcounselling"><span class="fa fa-twitter fa-3x" style="padding-right:25px; color:#67C9E0;"></span></a></p>
                      </div>
                      <div class="col-md-6">
                        <h1 >Getting There </h1>
                        <h5 class="contactSubHead" style=padding-top:10px;">Bus </h5>
                       <p>Bus Stop B09179 <br/>
                          Bus 7, 36, 77, 105, 106, 111, 123, 132, 174, 174E, 502, 502A & NR8 <br/>
                         1 minute walk</p>
                       <h5 class="contactSubHead">MRT</h5>
                      <p>Orchard MRT (Shaw House Exit)</p>
                     <h5 class="contactSubHead">Car Parking</h5>
                        <p>Shaw House/Centre <br/>
                        Pacific Plaza <br/>
                        Far East Shopping Center <br/>
                        Liat Towers <br/>
                        Wheelock Place</p>
                </div>
                      </div>


            </div>

            <div class="col-md-6 getintouch" >
             <h1 style="padding-left: 25px;" >Get in Touch</h1>
             {!! Form::open(['url' => 'contactMe','class'=> 'formClass', 'files' => true]) !!}
        {{--<form method="POST" action="{{url('/contactMe')}}" style="padding-top: 5px;" accept-charset="UTF-8">--}}
                    <label class="contact">Name: <span style="color: red;">*</span> </label><br>
                    <input class="contact" type="text" name="name"><br><br>
                    <label class="contact" >Email Address: <span style="color: red;">*</span> </label><br>
                    <input class="contact" name="email" type="text"><br><br>
                    <label class="contact" >Comment: <span style="color: red;">*</span></label><br>
                    <textarea class="contact" name="comment"></textarea>
                    <br><br>
                    <button value="submit" class="contact" type="submit">SUBMIT</button>
                    <div style="padding-left: 25px;">
                    @if($errors->any())
                    @foreach($errors->all() as $error)
                        <p style="color: red;">{{$error}}</p>
                    @endforeach
                    @endif
                    @if(Session::has('success'))
                    <div class="alert-success">Your message has been posted successfully.</div>
                    @endif
                    </div>
               {!! Form::close() !!}


            </div>
            </div>
                <br/><br/>
             <div class="row" style="margin-top: -50px; padding-left: 30px; padding-right: 30px;">
                <br/>
                <h1 style="padding-left: 10px;">Location in Map</h1>
                <div id="googleMap" style="width:100%;height:380px;"></div>
                </div>
             </div>


        </div>


@stop

@section('additionalFooter')
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script>
    function initialize() {
    var myLatLng = {lat:1.306200, lng: 103.830870};
      var mapProp = {
        center:new google.maps.LatLng(1.306200, 103.830870),
        zoom:18,
        scrollwheel: false,
        mapTypeId:google.maps.MapTypeId.ROADMAP
      };
      var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'International Counselling & Psychology Centre',
          'labelContent': 'International Counselling & Psychology Centre'
        });
        marker.info = new google.maps.InfoWindow({
          content: '<b>International Counselling & Psychology Centre</b>'
        });
          marker.info.open(map, marker);
    }
    google.maps.event.addDomListener(window, 'load', initialize);


    </script>

@stop