@extends('index')

@section('central')

    <div class="row" style="background: #EEEEEE;">
        <img src="{{ asset('img/tagline.png') }}" class="taglineHead">
        </div>

        <div class="founding" id="counselling">
            <center>
            <br>
            <h1 >COUNSELLING</h1>
            <img src="img/counselling3.png" class="logo">
            <h4>ICPC counsellors and psychologists work with individuals, children, adolescents, couples and families to address a variety of mental health issues that may interfere with satisfying interpersonal relationships in the home and the workplace.</h4>
            </center>
        </h4>
        <div class="row no-pad counselling">
                   <div class="col-md-4 chov nopadding">
                        <center>
                            <a href="#childModal" role="button" data-toggle="modal">
                            <div class="roundIcon"><img src="{{ asset('img/children.png') }}" style="max-width: 65px;"></div>
                            <h4>Children</h4>
                            </a>
                        </center>
                    </div>
                      <div class="col-md-4 chov  nopadding">
                         <center>
                         <a href="#adultModal" role="button" data-toggle="modal">
                        <div class="roundIcon"><img src="{{ asset('img/adult.png') }}" style="max-width: 65px;"></div>
                        <h4>Adolescents</h4>
                        </a>
                         </center>
                      </div>
                        <div class="col-md-4 chov  nopadding">
                           <center>
                           <a href="#menModal" role="button" data-toggle="modal">
                           <div class="roundIcon" style="margin-left: 15px;"><img src="{{ asset('img/man.png') }}" style="max-width: 65px;"></div>
                           <h4 style="padding-left: 15px;"> Men</h4>
                           </a>

                            </center>
                         </div>

                </div>
                <div class="row counselling">
                            <div class="col-md-4 chov">
                                <center>
                                <a href="#womenModal" role="button" data-toggle="modal">
                             <div class="roundIcon" style="margin-left: 15px;"><img src="{{ asset('img/woman.png') }}" style="max-width: 65px;"></div>
                             <h4 style="padding-left: 15px;">Women</h4>
                             </a>
                                </center>

                            </div>
                              <div class="col-md-4 chov">
                                 <center>
                                   <a href="#coupleModal" role="button" data-toggle="modal">
                                     <div class="roundIcon"><img src="{{ asset('img/couple.png') }}" style="max-width: 65px;"></div>
                                     <h4>Couples</h4>
                                     </a>


                                 </center>
                              </div>
                               <div class="col-md-4 chov">
                               <center>
                               <a href="#familyModal" role="button" data-toggle="modal">
                              <div class="roundIcon"><img src="{{ asset('img/family.png') }}" style="max-width: 65px;"></div>
                              <h4>Families</h4>
                              </a>

                               </center>
                                                 </div>

                        </div>
                         <div class="row counselling">
                            <div class="col-md-4 chov">
                                <center>
                                {{--<a href="#coupleModal" role="button" data-toggle="modal">--}}
                                    {{--<div class="roundIcon"><img src="{{ asset('img/couple.png') }}" style="max-width: 65px;"></div>--}}
                                    {{--<h2>Couples</h2>--}}
                                    {{--</a>--}}
                                </center>

                            </div>
                              <div class="col-md-4 chov">
                                 <center>
                                  <a href="#lgbtModal" role="button" data-toggle="modal">
                                     <div class="roundIcon"><img src="{{ asset('img/lgbt.png') }}" style="max-width: 65px;"></div>
                                     <h4>LGBT</h4>
                                  </a>

                                 </center>
                              </div>
                               <div class="col-md-4 chov">
                                                   {{--<center>--}}
                                                   {{--<a href="#lgbtModal" role="button" data-toggle="modal">--}}
                                                        {{--<div class="roundIcon"><img src="{{ asset('img/lgbt.png') }}" style="max-width: 65px;"></div>--}}
                                                        {{--<h2>LGBT</h2>--}}
                                                     {{--</a>   --}}
                                                   {{--</center>--}}
                                                 </div>

                        </div>

        <center>
            <a href="#myModal" role="button" class="btn" data-toggle="modal" style="text-decoration: none;"><div class="readmore">READ</div></a>
        </center>
        </div>
          <div class="why" id="workshop">
            <center>
            <br><br>
            <h1 >WORKSHOPS</h1>
            <img src="img/workshop.png"  style="max-width:180px;">
            <h4>Please ask us about our talks. As individuals growing, evolving within ourselves and in
                relationships, life is changing at an astonishing pace producing stress that comes from
                various directions&mdash;family, health, the workplace, unexpected challenges, and loss. Don’t
                wait for these events to happen in life. Harness and develop inner strength before life
                becomes challenging. Resilience can be learned. One of the main pillars of resilience are
                cognitive resources&mdash;use and application of knowledge and information to transform
                struggles to strengths. Come join us for one of talks, workshops or seminars and be life
                long learners with us. Watch our News/Activities section or Facebook for more information.</h4>
             <a href="{{url('news/category/1')}}"><div class="readmore">READ</div></a>
            </center>
        </div>

         <div class="why" id="school">
                    <center>
                    <br><br>
                    <h1 > SCHOOLS & EDUCATIONAL INSTITUTIONS</h1>
                    <img src="img/bus.ico"  style="max-width:180px;">
                    <h4>ICPC’s founders have a long standing partnership with schools and other
                        educational institutions to support students, parents, faculty and staff&mdash;kindergarten to elementary to postgrad and adult education. We provide counselling
                        support, crisis consultation, management and response, trainings for faculty, staff,
                        educational assistants, students and parents, as well as clinical supervision of school
                        based counsellors.</h4>
                     {{--<div class="readmore">READ</div>--}}
                    </center>
                </div>

          <div class="why" id="crisis">
            <center>
            <br><br>
            <h1 >CRISIS RESPONSE SERVICES</h1>
            <img src="img/hands.jpeg" style="width:300px;">
            <h4>ICPC offers several levels of support related to critical incidents that can affect business and
                educational communities. Services include training of employees prior to an incident;
                consultation with organizational leadership after an incident planning how to break bad
                news, provide emotional support to the community, plan memorials; individual
                counselling&mdash;onsite, at our offices, or telecounselling; onsite team response to conduct
                psycho-education and group crisis intervention meetings. </h4>
                <div style="text-align: left; padding-left: 20%; display: none; padding-right: 20%; padding-top: -5px; margin-top: -8px;" id="crisisExtra">
                <h2>Background Information</h2>
                <h4>The ICPC counselling team is specifically trained and experienced as Crisis Responders using the US-based NOVA model (National Organization for Victim Assistance).</h4>
                <h4>Varying levels of services supporting communities (organizational, corporate, schools, etc.) experiencing crisis and tragedy can be provided—Crisis Counselling, Consultation, On-site crisis response teams, and Training.</h4>
                <h2>Crisis Counselling</h2>
                <h4>The first level of response ICPC offers is crisis counselling. ICPC’s offices are centrally located on Orchard Road in Singapore where clients can attend an individual counselling session. Clients coming to Singapore for services can be provided with an intensive schedule of individual counselling sessions (for example, Mon, Wed, & Fri)  over the course of a week. This can take place immediately after the event and can be followed up with another intensive week sometime later, as needed. Counselling can also be provided by telephone or Skype, if more suitable.</h4>

                <h2>Consultation</h2>
                <h4>The second level of response ICPC offers is crisis response consultation. ICPC crisis responders are available to assist community leaders through the process of planning a response to a crisis situation. Incidents which have community-wide impact can vary from individual crises such as an industrial accident with injury or death, through to incidents where multiple people are injured or killed, such as a transportation incident.</h4>
                <h4>Examples of planning issues which ICPC crisis responders are prepared to address include:</h4>
                <h4>
                <ul>
                <li>Identifying high-risk groups in need of immediate and long-term support</li>
                <li>Identification of support resources</li>
                <li>Memorial planning</li>
                <li>Considerations related to resumption of work</li>
                <li>Education about the impact of the incident on individuals and the wider community</li>
                <li>Longer-term concerns for the community affected</li>
                </ul>
                </h4>
                <h2>On-Site Crisis Response Team</h2>
                <h4>The third level of response ICPC provides is a Crisis Response Team (minimum of 2 responders, if outside of Singapore) to the location of the crisis or where those affected by an incident may be gathering. A crisis response team provides three types of assistance: planning, “just-in-time” training and direct services. Planning support is focused on helping community leaders assess the impact of the crisis and plan for short and long-term support, addressing some of the issues mentioned previously in the consultation overview. “Just-in-time” training can be provided for human resource or employee assistance program staff to help them provide on-going support after the ICPC Crisis Response Team leaves. Direct services includes psycho-education, individual crisis and group crisis intervention.</h4>

                <h2>Training</h2>
                <h4>The fourth level of response ICPC provides is training. This can be as part of a business continuity plan or advanced pre-crisis response planning which would focus specifically on responding to the emotional and psychological effects of an incident. Examples of crisis/trauma related training topics ICPC trainers are prepared to address include:</h4>

                <h4>
                <ul>
                <li>The impact of disaster on the individual and community</li>
                <li>Crisis intervention skills</li>
                <li>Group crisis intervention skills</li>
                <li>Death notification and breaking bad news</li>
                <li>Death, loss and grief</li>
                <li>Impact of trauma on children and the elderly</li>
                <li>Cross-cultural considerations when responding to trauma</li>
                <li>Spirituality and trauma</li>
                <li>Caregiver stress</li>
                <li>Basic counselling skills</li>
                </ul>
                </h4>
                </div>
             <div class="readmore" id="hitme">READ</div>
            </center>
        </div>
        <div class="why" id="eap">
            <center>
            <br><br>
            <h1 >EMPLOYEE ASSISTANCE PROGRAM (EAP)</h1>
            <img src="img/eap.png"  style="max-width:180px;">
            <h4>ICPC’s founding team has been affiliated with multi-national corporations in Singapore and the
                region. For individual employees our counselling services have been a source of support,
                guidance, and learning, to ensure productivity and well-being in the workplace. For the teams
                within the corporations we offer talks, trainings & seminars that can meet corporate goals
                and work life balance. ICPC looks forward to be available to you. Please contact us to discuss
                your organization's individual and group needs.
</h4>
            {{--<div class="readmore">READ</div>--}}
            </center>
        </div>

          <div class="why" id="imago">
                    <center>
                    <br><br>
                    <h1 > IMAGO RELATIONSHIP THERAPY</h1>
                    <img src="img/therapy.jpg" style="max-width:180px;">
                    <br/>
                    <h4>Imago Relationship Therapy is a highly effective form of relationship and couples therapy
                        that has helped couples and individuals in a positive way for many years. Imago Relationship
                        Therapy is for everyone in a relationship who wants to learn an effective way of relating with
                        your partner in order to stay loving, intimate, strong and committed. <br/>
                        <span style="text-align: left">
                        <br/>
                        <ul>
                        Some couples who have benefited from Imago work are the following: <br/> <br/>
                          <li>Couples in a loving and committed relationship that they want to maintain with all the
                              right skills</li>
                              <li>Couples in a long term relationship who want to ensure that no disillusionment may set
                                  in</li>
                                  <li>Couples in a new relationship who want to build it on a good foundation of
                                      communication and intimacy</li>
                        </ul>
                        </span>

                     <div style="text-align: left; display: none; padding-top: -5px; margin-top: -8px;" id="serviceExtra">
                     <ul style="padding-top:0;">
                     <li>Couples who feel that their loving relationship is blocked in some ways by ineffective
                         patters of relating</li>
                         <li>Couples who need assistance in repairing the relationship that has experienced some
                                  pain</li>
<li>Couples who are faced with important transitions in their lives</li>
                     </ul>
                     IMAGO couple’s therapy will help you understand your partner’s needs and know exactly
                     how to meet them in a skilful way. This will deepen your understanding of your partner and
                     discover the authentic person in each of you that will lead to a safe and secure relationship.
                     Commitments will be strengthened through loving and caring behaviors. Put an end to all
                     your arguments, criticisms and put downs. Learn how to listen, communicate and express
                     yourself in order to get the love that you want. <br/> <br/>
                     There are two Certified Imago Therapists at International Counselling & Psychology Centre
                     who can: <br/><br/>
                     <ul>
                     <li>Introduce you and your partner to Imago relationship therapy in one on one sessions in
                         a private setting</li>
                         <li>Guide you, as a single individual, to prepare for a strong foundation of relationship
                       skills that will be long lasting</li>
                       <li> Provide you with information on the “Getting The Love You Want” weekend
                           workshop for couples, offered yearly in Singapore</li>
                           <li>
                           Help parents build on parenting skills that will help them connect with their children
                           and prevent negative faulty patterns of family dynamics from being passed on
                           </li>
                     </ul>
                     There are moments in a loving and safe relationship that one may feel distant or unsupported.
                     Life’s challenges and demands may come along and we wonder what is going on. We may
                     worry that the initial excitement of the earlier years of young love is now gone and differences,
                     arguments and frustrations may be increasing. <br/> <br/>
                     These differences, disagreements and frustrations that are now observed is part of what
                     occurs in the stages of relationship as explained by The Imago Relationship theory.
                     Understand the story of your relationship in an insightful and curious way. Exploring,
                     understanding and appreciating your differences can become the most joyous experience of
                     your life, and a path to lasting love. <br/> <br/>
                     Learn The Imago Dialogue now! It is a simple, respectful and effective way to talk with your
                     partner about the things that really matter. In Imago, there’s no blame, shame or criticism.
                     Instead, a stronger connection comes through attentive listening and being deeply heard in an
                     emotionally safe environment. <br/> <br/>
                     A world-leading approach Imago is based on the best-selling book “Getting The Love You
                     Want”, by Harville Hendrix, PhD, who co-founded Imago Relationships International
                     together with his partner, Helen LaKelly Hunt, PhD. Imago weaves together leading
                     psychological theories and practical observations on the experience of love, offering an
                     approach to relationships that is both compelling and easy to understand. The Imago Institute
                     has certified well over 1,000 therapists in over 25 countries. It’s helpful to read about Imago,
                     but it is even more compelling to see it demonstrated at workshops or to experience it in
                     counselling. <br/> <br/>
                     Feeling connected to someone you love can be the most wonderful experience in the world.
                     Imago Relationships Therapy counseling will help you and your partner build a better life
                     together.
                     </div>
</h4>
                     <div class="readmore" id="serviceRead">READ</div>
                    </center>
                </div>






                {{--===============================================================================--}}
                 {{--TwO NEW SECTIONS--}}
                {{--===============================================================================--}}

          <div class="why" id="super">
                    <center>
                    <br><br>
                    <h1>COUNSELLING SUPERVISION</h1>
                    <img src="img/supervision.png" style="max-width:180px;">
                    <br/>
                    <h4>Counsellors, psychotherapists and psychologists are encouraged to have ongoing supervision as long as they are practising in the field of mental health. This is to ensure that clients receive professional, and ethical services and that the professional continuously improve their skills and training, allowing them to offer more value to their clients.<br/>

                     <div style="text-align: left; display: none; padding-top: -5px; margin-top: -8px;" id="supervisionExtra">
                     <br/>
                     <h4>
                     At ICPC, we offer counselling supervision, training and development for individuals and groups. In this setting, the professional can discuss their work, explore skills that may benefit the established treatment goals and understand feelings that may come up during sessions. ICPC has offered supervision to psychology students at the Master’s level, counsellors in the school and community setting, mental health professionals in hospital and clinical settings and government institutions and human resources personnel in the corporate setting.
                     </h4>
                     <h4>
                     In supervision, three levels are usually attended to&mdash;these are the counsellor as the professional practitioner, the professional practitioner within a group or institutional practice and the personal world of the counsellor.
                     </h4>
                     <h4>
                     Client confidentiality is maintained at all times. The clients’ personal information is not revealed and all other information shared is under a contract that states that the information will be safeguarded within the supervision relationship.
                     </h4>
                     <h4>
                     If you have any questions regarding supervision, feel free to contact us and we would be happy to discuss your specific needs.
                     </h4>
                     </div>
</h4>
                     <div class="readmore" id="supervisionRead">READ</div>
                    </center>
                </div>


          <div class="why" id="cross">
                    <center>
                    <br><br>
                    <h1>CROSS-CULTURAL SERVICES</h1>
                    <img src="img/crossculture.png" style="max-width:180px;">
                    <br/>
                    <h4>Living, working, and traveling in multi-cultural contexts can be challenging. While the diversity of visible cultural&mdash;food, festivals, language, architecture and clothing can be a lot of fun, the invisible culture of hierarchy, respect, roles, values, attitudes and beliefs can be difficult to navigate. Getting the most out of your living, working and traveling experiences, requires inter-culture competence. Those who hold on strongly to their own cultural identity will have the greatest difficulties, while those who learn and adapt in some ways to the cultures around them are the most successful. You don't have to go it alone, let ICPC give you a head start in developing your own cultural competence.<br/>

                     <div style="text-align: left; display: none; padding-top: -5px; margin-top: -8px;" id="crossExtra">
                     <h4>
                     <br/>
                     With years of experience of living and working with many diverse cultures, ICPC is especially
                     equipped to provide training and workshops on navigating cross-cultural relationships personally and professionally. Topics that the ICPC team are ready to address include Third Culture Kids, cross-cultural sensitivity, repatriation, living and working in Singapore and the region. Please contact us for a list of workshops or to discuss the needs of your organization.
                     </h4>

                     </div>
</h4>
                     <div class="readmore" id="crossRead">READ</div>
                    </center>
                </div>




{{--MAIN ALL--}}
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel"> All Categories </h4>
      </div>
      <div class="modal-body">
        <div class="row">

                <div class="col-sm-6">
                        <h5>Addictions <br/>
                         Adjustment, transition issues
                         <br/>
                         Adulthood & aging <br/>
                         Alcohol/drug mis/use <br/>
                         Anger management strategies <br/>
                         Anxiety <br/>
                         Blended families <br/>
                         Bullying <br/>
                         Co-parenting <br/>
                         Coming out <br/>
                         Counciousness raising <br/>
                         Crisis/trauma <br/>
                         Cross-cultural relationships <br/>
                         Depression <br/>
                         Developmental stage issues <br/>
                         Divorce/separation <br/>
                         Eating disorders <br/>
                         Effective communication skills <br/>
                         Empty nesting <br/>
                         Expat living <br/>
                         Family violence <br/>
                         Grief/loss <br/>
                         Growth and motivation <br/>
                         Infidelity <br/>
                         Inner child work
                        </h5>
                        </div>

                        <div class="col-sm-6">
                        <h5>

                        Intergenerational family work <br/>
                        Internalized homophobia <br/>
                        Leaving home <br/>
                        Life stage transitions <br/>
                        menopause <br/>
                        Mood management <br/>
                        Pain management <br/>
                        Parent-child relationships <br/>
                        Parenting <br/>
                        Phobias <br/>
                        Pre-marital preparation <br/>
                        Relationship issues <br/>
                        School anxieties <br/>
                        Self-acceptance <br/>
                        Self-harm <br/>
                        Sexual dysfunction <br/>
                        Sexuality issues <br/>
                        Sibling rivalry <br/>
                        Stress <br/>
                        Third Culture Families <br/>
                        Third Culture Kids <br/>
                        Time management <br/>
                        Understanding family dynamics <br/>
                        Weight management <br/>
                        Work relationships
                        </h5>
                        </div>
        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


{{--Families--}}
<div class="modal fade" id="familyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h4 class="modal-title" id="myModalLabel"> Families </h4>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-sm-7">
            <h5>Adjustment, transition issues <br/>
                       Expat living <br/>
                       Blended families <br/>
                       Divorce/separation <br/>
                       Empty nesting <br/>
                       Effective communication skills <br/>
                       Family violence <br/>
                       Inter generational family work <br/>
                       Parenting <br/>
                       Parent-child relationships <br/>
                       Pre-marital preparation <br/>
                       Third Culture Families <br/>
                       Understanding family dynamics
                       </h5>
            </div>



        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

{{--LGBT--}}
<div class="modal fade" id="lgbtModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h4 class="modal-title" id="myModalLabel"> LGBT </h4>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-sm-7">
            <h5>Cross-cultural relationships <br/>
                       Coming out <br/>
                       Consciousness raising <br/>
                       Infidelity <br/>
                       Intemalized homophobia <br/>
                       Life stage transitions <br/>
                       Pre-marital preparation <br/>
                       Relationship issues <br/>
                       Self-acceptance
            </h5>
            </div>



        </div>

</div>
<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
{{--CHilde--}}
<div class="modal fade" id="childModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h4 class="modal-title" id="myModalLabel"> Children </h4>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-sm-7">
            <h5>Adjustment, transition issues <br/>
                       Anger management strategies <br/>
                       Anxiety <br/>
                       Bullying <br/>
                       Crisis/trauma <br/>
                       Depression <br/>
                       Developmental stage issues <br/>
                       Expat living <br/>
                       Grief/loss <br/>
                       Mood management <br/>
                       Parent-child relationships <br/>
                       Phobias <br/>
                       Sibling rivalry <br/>
                       Stress <br/>
                       Third Culture Kids <br/>
                       Weight management <br/>
            </h5>
            </div>



        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

{{--MEN--}}
<div class="modal fade" id="menModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h4 class="modal-title" id="myModalLabel"> Men </h4>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-sm-6">
            <h5>Addictions

                      <br/>Adjustment, transition issues
                      Adulthood & aging <br/>
                      Anger management strategies<br/>
                      Anxiety<br/>
                      Crisis/trauma<br/>
                      Cross-cultural relationship issues<br/>
                      Cross-cultural relationships<br/>
                      Depression<br/>
                      Eating disorders<br/>
                      Expat living<br/>
                      Family violence<br/>
                      Grief/loss<br/>
                      Growth and motivation <br/>
                      Infidelity<br/>
                      Inner child work <br/>
                      Life stage transitions<br/>
                      Mood management <br/>
                      Pain management<br/>
                      Parent-child relationships<br/>
                      Phobias<br/>
                      Pre-marital preparation<br/>
                      Relationship issues<br/>
                      Self-harm<br/>
                      Sexual dysfunction<br/>
                      Stress<br/>
                      Third Culture Families<br/>
                      Third Culture Kids<br/>
                      Time management <br/>
                      Weight management <br/>
                      Work relationships
            </h5>
            </div>



        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

{{--adult--}}
<div class="modal fade" id="adultModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h4 class="modal-title" id="myModalLabel"> Adolescents </h4>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-sm-6">
            <h5>Addictions

                      <br/>Adjustment, transition issues
                       <br/>
                      Anger management strategies<br/>
                      Anxiety<br/>
                      Alcohol/drug use<br/>
                      Bullying<br/>
                      Crisis/trauma<br/>
                      Cross-cultural relationships<br/>
                      Depression<br/>
                      Eating disorders<br/>
                      Expat living<br/>
                      Grief/loss<br/>
                      Leaving home <br/>
                      Mood management <br/>
                      Parent-child relationships<br/>
                      Phobias<br/>
                      Relationship issues<br/>
                      School anxieties <br/>
                      Self-harm<br/>
                      Stress<br/>
                      Third Culture Kids<br/>
                      Time Management <br/>
                      Weight management
            </h5>
            </div>



        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>






{{--WOMEN--}}
<div class="modal fade" id="womenModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h4 class="modal-title" id="myModalLabel"> Women </h4>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-sm-6">
            <h5>
Addictions <br/>
Adjustment, transition issues <br/>
Adulthood & aging <br/>
Anger management strategies<br/>
Anxiety<br/>
Crisis/trauma<br/>
Cross-cultural relationships <br/>
Depression<br/>
Eating disorders<br/>
Expat living<br/>
Family violence<br/>
Grief/loss<br/>
Growth and motivation <br/>
Infidelity<br/>
Inner child work <br/>
Life stage transitions<br/>
menopause<br/>
Mood management <br/>
Pain management<br/>
Parent-child relationships<br/>
Phobias<br/>
Pre-marital preparation<br/>
Relationship issues<br/>
Self-harm<br/>
Sexual dysfunction<br/>
Stress<br/>
Third Culture Families<br/>
Third Culture Kids<br/>
Time management <br/>
Weight management <br/>
Work relationships
            </h5>
            </div>



        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

{{--Couple--}}
<div class="modal fade" id="coupleModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h4 class="modal-title" id="myModalLabel">Couples </h4>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-sm-6">
            <h5>
Addictions <br/>
Adjustment, transition issues <br/>
Adulthood & aging <br/>
Crisis/trauma <br/>
Cross-cultural relationship issues <br/>
Cross-Cultural relationships <br/>
Co-parenting <br/>
Divorce/separation <br/>
Effective communication skills <br/>
Expat living <br/>
Family violence <br/>
Grief/loss <br/>
Infidelity <br/>
Life stage transitions <br/>
Pre-marital preparation <br/>
Relationship issues <br/>
Sexuality issues <br/>

            </h5>
            </div>



        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>




@stop