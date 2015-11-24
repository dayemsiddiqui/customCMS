@include('adminHeader')
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
                      <a  href="{{url('/admin')}}">
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
                      <a class="active" href="{{url('/newMember')}}" >
                          <i class="fa fa-tasks"></i>
                          <span>Manage Members</span>
                      </a>

                  </li>


              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3>Dashboard</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
                          		    {{--=================================================================--}}

                               {!! Form::open(['url' => 'editedMember', 'files' => true]) !!}
                                  <div class="form-group">
                                      <label style="color: #000000">Name</label>
                                      <input type="hidden" name="id" value="{{$member->id}}"/>
                                      <input class="form-control" name="name" type="text" value="{{$member->name}}">
                                      {{--{!! Form::text('name', null, ['class' => 'form-control', 'value' => $member->name]) !!}--}}
                                      <label style="color: #000000">Education</label>
                                      <input class="form-control" name="education" type="text" value="{{$member->education}}">
                                      {{--{!! Form::text('education', null, ['class' => 'form-control']) !!}--}}
                                       <label style="color: #000000">Availability</label> <br/>
                                        <?php $weekdays = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']; ?>
                                        @foreach($weekdays as $w)
                                        <?php if(strpos($member->availability, $w) !== false) {
                                            echo "<input type='checkbox' name='days[]' value='$w' checked />$w<br />";
                                        }else{
                                            echo "<input type='checkbox' name='days[]' value='$w' />$w<br />";
                                        }
                                        ?>

                                        @endforeach
                                      <label style="color: #000000">Details</label>
                                      {{--{!! Form::textarea('content', null, ['class' => 'form-control']) !!}--}}
                                      <textarea name="content" id="mytextarea">{!! $member->content !!}</textarea>
                                      <label style="color: #000000">Upload Image</label>
                                      {!! Form::file('image', null) !!}
                                  </div>

                                  <div class="form-group">
                                      {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
                                  </div>
                                  {!! Form::close() !!}

                                  @if ($errors->any())
                                      <ul class="alert alert-danger">
                                          @foreach($errors->all() as $error)
                                              <li>{{$error}}</li>
                                          @endforeach
                                      </ul>
                                  @endif
                                    {{--=================================================================--}}
                          		</div>


          	</div>
			
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->

      <!--footer end-->
  </section>




  @include('adminFooter')