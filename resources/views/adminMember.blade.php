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
                     <li><a class="logout" onclick="window.open('{{url('/about2')}}');" >Preview Website</a></li>
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
              
              	  <p class="centered"><a href="profile.html"><img src="{{asset('assets/img/ui-sam.jpg')}}" class="img-circle" width="60"></a></p>
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
          	<h3>Manage Members</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
          		    {{--=================================================================--}}

               {!! Form::open(['url' => 'addMember', 'files' => true]) !!}
                  <div class="form-group">
                      <label style="color: #000000">Name</label>
                      {!! Form::text('name', null, ['class' => 'form-control']) !!}
                      <label style="color: #000000">Education</label>
                      {!! Form::text('education', null, ['class' => 'form-control']) !!}
                       <label style="color: #000000">Availability</label> <br/>
                        <input type="checkbox" name="days[]" value="Monday" />Monday<br />
                        <input type="checkbox" name="days[]" value="Tuesday" />Tuesday<br />
                        <input type="checkbox" name="days[]" value="Wednesday" />Wednesday<br />
                        <input type="checkbox" name="days[]" value="Thursday" />Thursday<br />
                        <input type="checkbox" name="days[]" value="Friday" />Friday <br/>
                        <input type="checkbox" name="days[]" value="Saturday" />Saturday <br/>
                        <input type="checkbox" name="days[]" value="Sunday" />Sunday <br/>
                      <label style="color: #000000">Details</label>
                      {{--{!! Form::textarea('content', null, ['class' => 'form-control']) !!}--}}
                      <textarea name="content" id="mytextarea"></textarea>
                      <label style="color: #000000">Upload Image</label>
                      {!! Form::file('image', null) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::submit('Add Member', ['class' => 'btn btn-success']) !!}
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

          		<div class="col-lg-12">
          		 {{--=================================================================--}}

                    {!! Form::open(['url' => 'deleteMember']) !!}
                        <div class="form-group">
                            <label style="color: #000000">Members</label>
                            <select name="id" class="form-control">
                            <option value=''>Select a member</option>
                            @foreach($members as $m)
                              <option value='{{$m->id}}'>{{ $m->name}}</option>

                              @endforeach
                            </select>

                        </div>
                       <div class="form-group">
                            {!! Form::submit('Delete Member', ['class' => 'btn btn-danger']) !!}
                        </div>
                        {!! Form::close() !!}
                         {{--=================================================================--}}
                 </div>

                 <div class="col-lg-12">
                 <div class="content-panel">
                      <h4>Members</h4><hr><table class="table table-hover">


                          <thead>
                          <tr>
                              <th>#</th>
                              <th>Member Name</th>
                              <th>Education</th>
                              <th>Created At</th>

                          </tr>
                          </thead>
                          <tbody>
                           @foreach($members as $m)
                          <tr>
                              <td>{{$m->id}}</td>
                              <td>{{$m->name}}</td>
                              <td>{{$m->education}}</td>
                              <td>{{$m->created_at}}</td>

                          </tr>
                          @endforeach
                          </tbody>
                      </table>
                  </div>
                 </div>



          	</div>
			
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->

      <!--footer end-->
  </section>

@include('adminFooter')