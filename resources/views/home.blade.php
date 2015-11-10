@extends('index')

@section('central')

  <div class="row">
        <img src="{{ asset('img/tagline.png') }}" class="taglineHead">
        </div>
        <br/>
     <div id="owl-demo" class="owl-carousel owl-theme slider">

       <div class="item"><div class="sliderText"><h3>"Community-based counselling centre supporting the expat and local community."</h3></div></div>
       <div class="item"><div class="sliderText"><h3>"Team based psychological approach liaising with community resources."</h3></div></div>
       <div class="item"><div class="sliderText"><h3>"Professional, confidential, <br/> ethics-based services."</h3></div></div>
       <div class="item"><div class="sliderText"><h3>" Providing a warm, comfortable, safe environment to address concerns."</h3></div></div>
       <div class="item"><div class="sliderText"><h3>"International counsellors with <br/> 40 years collective experience."</h3></div></div>
       <div class="item"><div class="sliderText"><h3>"Addressing transition & life stage issues as well as clinical issues of anxiety, depression and more."</h3></div></div>
       <div class="item"><div class="sliderText"><h3>"The needs of the client are at <br/> the centre of our approach."</h3></div></div>
       <div class="item"><div class="sliderText"><h3>"Supporting fulfilled, satisfied, <br/> healthy and meaning-filled living."</h3></div></div>
     </div>
 
     <div class="about">
            <center>
            <img src="img/swirl.png" class="topStar" style="padding-top: 0;">
            <h1>A LITTLE ABOUT US</h1>
            <h4 class="lineAdjust">International Counselling & Psychology Centre’s (ICPC) professional team brings over 40
                years collective experience providing supportive mental health services in an international
                environment, both to the expatriate and local community, and within the region. ICPC’s team
                understands, as professional therapists and from their personal experience of working and
                living internationally, the challenges faced by children, adolescents, adults, couples and
                families.</h4>
            <div class="row">
            <div class="stackcirlg">
                <nav class="svgImg">
                    <a href="#myModal" role="button" class="btn" data-toggle="modal"><img src="{{ asset('img/dollar.png') }}"style="max-width:150px;"></a>
                    <a href="#modalEmg" role="button" class="btn" data-toggle="modal"><img src="{{ asset('img/emergency.png') }}" style="max-width:150px;"></a>
                    <a href="{{ url('/news') }}"><img src="{{ asset('img/med3.png ') }}"style="max-width:150px;"></a>
                </nav>
                <nav class="svgImgText">
                                    <a href="#myModal" role="button" class="btn" data-toggle="modal">Terms & Fees</a>
                                   <a href="#modalEmg" role="button" class="btn" data-toggle="modal">Emergency Numbers</a>
                                    <a href="/news"  class="btn">News Updates</a>
                </nav>
            </div>
            <div class="stackcirsm">
                <div class="col-sm-12">
                <div class="row">
                <a href="#myModal" role="button" class="btn" data-toggle="modal"><img src="{{ asset('img/dollar.png') }}"style="max-width:150px;"></a>
                <br/>
                <a href="#myModal" role="button" class="btn" data-toggle="modal">Terms & Fees</a>
                </div>
                <div class="row">
                <a href="#modalEmg" role="button" class="btn" data-toggle="modal"><img src="{{ asset('img/emergency.png') }}" style="max-width:150px;"></a>
                <br/>
                <a href="#modalEmg" role="button" class="btn" data-toggle="modal">Emergency Numbers</a>
                </div>
                <div class="row">
                <a href="{{ url('/news') }}"><img src="{{ asset('img/med3.png ') }}"style="max-width:150px;"></a>
                <br/>
                <a href="/news"  class="btn">News Updates</a>
                </div>
                </div>
            </div>
            </div>
            </center>
        </div>
        <a href="{{ url('/about2') }}" style="text-decoration: none; color: #000000;">
        <div class="founding">
            <center>
            <img src="img/swirl.png" class="topStar">
            <h1> THE FOUNDING TEAM</h1>
            <img src="img/founders.jpg" class="founderImage">
            <h4 class="lineAdjust">Suzanne, Richard & Lissy have worked as a professional team for almost a decade. Between
                us we have lived and worked in 17 countries and supported clients from over 40 different
                cultures; as parents, teachers and counsellors, together we have 70 years experience guiding children,
                teens and adults from the home to the classroom, and into the world; some hobbies include the going to the theatre,
                knitting and geocaching. We look forward to meeting you.
            </h4>
        </center>
        </div>
        </a>
        <div class="services">
            <center>
            <img src="img/swirl.png" class="topStar">
            <h1>SERVICES</h1>
            </center>
            <br><br>
            <div class="row">
                <div class="col-md-5 col-md-offset-1">
                    <div class="col-sm-2">
                        <i class="fa fa-question-circle fa-3x amb" ></i>
                    </div>
                    <div class="col-sm-10">
                       <a href="{{ url('services#counselling') }}"> <h3>Counselling</h3> </a>
                        <p>ICPC counsellors and psychologists work with individuals, children, adolescents, couples and
                           families to address a variety of mental health issues that may interfere with satisfying
                           interpersonal relationships in the home and the workplace.</p>
                    </div>


                </div>
                <div class="col-md-5 col-md-offset-0">
                  <div class="col-sm-2">
                        <i class="fa fa-comment fa-3x amb" ></i>
                    </div>
                    <div class="col-sm-10">
                     <a href="{{ url('/services#workshop') }}">   <h3>Workshops</h3> </a>
                        <p>Join us for one of talks, workshops or seminars and be life long learners with us. Watch our
                           News/Activities section or Facebook for announcements and upcoming events.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-5 col-md-offset-1">
                    <div class="col-sm-2">
                        <i class="fa fa-exclamation-triangle fa-3x amb" ></i>
                    </div>
                    <div class="col-sm-10">
                      <a href="{{ url('/services#crisis') }}">  <h3>Crisis Response Services</h3></a>
                        <p>ICPC offers several levels of support related to critical incidents that can
                            affect business and educational communities. Services include ...
                        </p>
                    </div>


                </div>
                <div class="col-md-5 col-md-offset-0">
                  <div class="col-sm-2">
                        <i class="fa fa-money fa-3x amb" ></i>
                    </div>
                    <div class="col-sm-10">
                      <a href="{{ url('/services#eap') }}"> <h3>Employee Assistance Program (EAP)</h3> </a>
                        <p>ICPC’s founding team have been affiliated multi-national corporations
                            in Singapore and the region.
                        </p>
                    </div>
                </div>
            </div>

                 <div class="row">
                            <div class="col-md-5 col-md-offset-1">
                                <div class="col-sm-2">
                                    <i class="fa fa-book fa-3x amb" ></i>
                                </div>
                                <div class="col-sm-10">
                                   <a href="{{ url('/services#school') }}"> <h3>Schools & Educational Institutions</h3></a>
                                    <p>ICPC’s founders have long standing relationships with schools and other
                                        educational institutions to support students, parents and faculty and staff.</p>
                                </div>


                            </div>
                            <div class="col-md-5 col-md-offset-0">
                              <div class="col-sm-2">
                                    <i class="fa fa-heart fa-3x amb" ></i>
                                </div>
                                <div class="col-sm-10">
                                    <a href="{{ url('/services#imago') }}"><h3>Imago Relationship Therapy</h3></a>
                                    <p>Imago Relationship Therapy is a highly effective form of relationship and couples therapy
                                       that has helped couples and individuals in a positive way for many years.</p>
                                </div>
                            </div>
                        </div>

                         <div class="row">
                                <div class="col-md-5 col-md-offset-1">
                                    <div class="col-sm-2">
                                        <i class="fa fa-phone fa-3x amb" ></i>
                                    </div>
                                    <div class="col-sm-10">
                                       <a href="{{ url('/services#super') }}"> <h3>Counselling Supervision</h3></a>
                                        <p>Counsellors, psychotherapists and psychologists are encouraged to have ongoing supervision as long as they are practising in the field of mental health.</p>
                                    </div>


                                </div>
                                <div class="col-md-5 col-md-offset-0">
                                  <div class="col-sm-2">
                                        <i class="fa fa-globe fa-3x amb" ></i>
                                    </div>
                                    <div class="col-sm-10">
                                        <a href="{{ url('/services#cross') }}"><h3>Cross-Cultural Services</h3></a>
                                        <p>Living, working, and traveling in multi-cultural contexts can be challenging. While the diversity of visible cultural--food, festivals, language, architecture.</p>
                                    </div>
                                </div>
                            </div>
        <br/><br/><br/>
        </div>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
        <h4 class="modal-title" id="myModalLabel"> Fees, Hours & Terms of Service </h4>
      </div>
      <div class="modal-body">
        <h4>Fees</h4>
        <h6>Counselling rates - $200 per 50 minute session</h6>
        <h4>Hours</h4>
        <h6>Counselling hours are available 7 days a week including some evenings.
            <br/>Administrative staff are available Monday, Tuesday, and Thursday.
                 9:00a.m. to 5:00p.m.
        </h6>
        <h4>Terms of Service</h4>
        <h6>
        Clients are asked to provide a full 24-hour notice if they are unable to attend a
        scheduled session, otherwise clients will be asked to pay for the missed session.
        </h6>

         <h4>Insurance</h4>
            <h6>
            Please contact us to discuss what insurance companies we are working with
            and how we can support clients to apply for insurance coverage.
            </h6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="modalEmg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
        <h4 class="modal-title" id="myModalLabel">Emergency Numbers</h4>
      </div>
      <div class="modal-body">
        <h6>Institute of Mental Health, Crisis Helpline
            <br/>6389 2222 (24-hour hotline)
            <br/><br/>
            Samaritans of Singapore <br/>
            1800 221 4444 (24-hour suicide crisis line)
            <br/><br/>
            AWARE Helpline
            <br/>Association of Women for Action and Research <br/>
            1800 774 5935 (Mon to Fri; 3pm to 9:30pm)
            <br/><br/>

            Sexual Assault Care Centre
            <br/>6779 0282 (Mon to Fri; 10am to midnight)
            <br/>
        </h6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@stop