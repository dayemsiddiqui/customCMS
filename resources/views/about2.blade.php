@extends('index')
{{--#F7F7F7--}}
@section('central')

  <div class="row" style="background: #F7F7F7;">
        <img src="{{ asset('img/tagline.png') }}" class="taglineHead">
        </div>
<div class="container-fluid" style="padding-left: 8%; padding-right: 8%; background: #F7F7F7;">
      <div class="row" style="background:#F7F7F7;">
           <div style="text-align: center;">
            <h1>THE TEAM</h1>
           </div>
      <div class="col-md-4   nopadding">
      <div class="shadowy" >
               <div>
               <div class="aboutOverlay"></div>
               <img  src="img/3.jpg" class="imgStyle" style="max-width: 100%;" id="d8"/>
               </div>
                <br/>
                <h4 style="font-weight: 700; text-align: left; padding-left: 20px;">Lissy Puno, MA</h4><br/>
                <div class="shortDescription">
                <div style="text-align: left;">
                <p>
                Counselling Psychologist
                Certified Imago Relationship
                Therapist
                </p></div>

                <p style="text-align: left;">
               Counselling for children, adolescents,
               individuals, couples and families in English. Lissy provides
                counselling, crisis response,
                training, and cross-cultural services.
               </p>
              </div>
              <div class="availability">
              <p>
              <h4 style="font-weight: 700;" >Availability</h4>
              <p>Monday, Wednesday, Thursday,
              <br/>Saturday (first of the month)
              </p>
              </div>

                <center>
                    {{--<div class="tags py1">Detailed Profile</div>--}}
                    <a href="{{url('/a1')}}" style="text-decoration: none;"> <div class="tags">Detailed Profile</div></a>
                </center>


            </div>

      </div>

      <div class="col-md-4  nopadding" >
      <div class="shadowy">
          <div>
           <div class="aboutOverlay"></div>
           <img  src="img/1.jpg"class="imgStyle"  style="max-width: 100%;"/>
           </div>

                            <br/>
                            <h4 style="font-weight: 700; text-align: left; padding-left: 20px;">Richard Logan, MSocSc</h4><br/>
                <div class="shortDescription">
                            <div style="text-align: left;">
                            <p>
                            Counsellor / Psychotherapist
                            Certified Imago Relationship
                            Therapist
                            </p></div>


                         <p style="text-align: left;">
                        Counselling for adolescents,
                        individuals, couples and families in English. Richard
                         provides counselling, crisis
                         response, cross-cultural,
                         training, and IMAGO services.
                        </p>
                </div>
                        <div class="availability">
                        <p>
                        <h4 style="font-weight: 700;" >Availability</h4>
                        <p>Tuesday, Wednesday, Thursday
                        <br/>morning, Friday, Saturday and Sunday
                        </p>
                        </p>
                        </div>

                        <center>
                        <a href="{{url('/a2')}}" style="text-decoration: none;"> <div class="tags">Detailed Profile</div></a>
                          {{--<div class="tags py2">Detailed Profile</div>--}}
                      </center>
      </div>

      </div>

      <div class="col-md-4 nopadding">
  <div class="shadowy">
           <div>
        <div class="aboutOverlay"></div>
        <img  src="img/2.jpeg"class="imgStyle"  style="max-width: 100%;"/>

        </div>

                            <br/>
                            <h4 style="font-weight: 700; text-align: left; padding-left: 20px;">Suzanne Anderson, MSS </h4><br/>

                           <div class="shortDescription">
                           <div class="someDiv" style="text-align: left;">
                            <p>
                             Counsellor
                            Registered Social Worker (SG)
                            Certified Crisis Responder &
                            Trainer (USA)
                            </p></div>



                       <p style="text-align: left;">
                       Counselling for adolescents,
                       individuals, couples and families in English. Suzanne provides
                        counselling, crisis response,
                        training, and cross-cultural services.
                       </p>
                        </div>
                        <div class="availability">
                          <p>
                          <h4 style="font-weight: 700;" >Availability</h4>
                          <p>Tuesday, Wednesday, and Friday
                          </p>
                        </div>

                      <center>
                             {{--<div class="tags py3">Detailed Profile</div>--}}
                            <a href="{{url('/a3')}}" style="text-decoration: none;"> <div class="tags">Detailed Profile</div></a>
                         </center>


      </div>

      </div>

    </div>

    @if($someshit != -1)
    <div class="row"> <hr style="border-width:1px; border-color: grey;  "/> </div>
    <div class="row">
    @foreach($members as $member)
    <div class="col-md-4" style="text-align: center;">
    <a href='{{url("memberDetail/$member->id")}}' style="text-decoration: none;">
    <img src='{{asset("img/emp/$member->image")}}' class="empId"/>
    <div class="row" ><h2>{{$member->name}}</h2></div>
    </a>
    </div>
    @endforeach
    </div>
    @endif

</div>


@stop