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
              
              	  <p class="centered"><a href="profile.html"><img src="{{asset('assets/img/ui-sam.jpg')}}" class="img-circle" width="60"></a></p>
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

                {!! Form::open(['url' => 'admin']) !!}
                    <div class="form-group">
                        <label style="color: #000000">Category Name:</label>
                        {!! Form::text('category', null, ['class' => 'form-control']) !!}
                    </div>
                   <div class="form-group">
                        {!! Form::submit('Add Category', ['class' => 'btn btn-success']) !!}
                    </div>
                    {!! Form::close() !!}
                    {{--=================================================================--}}
          		</div>

          		<div class="col-lg-12">
          		  {{--=================================================================--}}

                  {!! Form::open(['url' => 'deleteCategory']) !!}
                      <div class="form-group">
                          <label style="color: #000000">Delete Category:</label>
                          <select  name="id" class="form-control">
                          <option default>Select a category</option>
                          @foreach($input as $in)
                            <option value='{{$in->id}}'>{{ $in->category}}</option>
                            @endforeach
                          </select>
                      </div>
                      <?php
                      if(count($input) <= 1){
                      $disabled = "disabled";
                      }else{
                      $disabled = "";
                      }
                      ?>
                     <div class="form-group">

                          {!! Form::submit('Delete Category', ['class' => 'btn btn-danger', $disabled]) !!}

                      </div>
                      {!! Form::close() !!}
                   {{--=================================================================--}}
                 </div>

                 <div class="col-lg-12">
                 <div class="content-panel">
                      <h4>Categories</h4><hr><table class="table table-hover">


                          <thead>
                          <tr>
                              <th>#</th>
                              <th>Category Name</th>
                              <th>Created At</th>

                          </tr>
                          </thead>
                          <tbody>
                          @foreach($input as $in)
                          <tr>
                              <td>{{$in->id}}</td>
                              <td>{{$in->category}}</td>
                              <td>{{$in->created_at}}</td>

                          </tr>
                          @endforeach
                          </tbody>
                      </table>
                  </div>
                 </div>








                 <div class="col-lg-12">
                 <br/><br/>
                           		       {{--=================================================================--}}
                                      {!! Form::open(['url' => 'createTag']) !!}
                                       <div class="form-group">
                                           <label style="color: #000000">Tag Name:</label>
                                           {!! Form::text('tag_name', null, ['class' => 'form-control']) !!}
                                           <br/>
                                           <label style="color: #000000">Post</label>
                                           <select name="post_id" class="form-control">
                                           <option value=''>Select a post</option>
                                           @foreach($posts as $post)
                                             <option value='{{$post->id}}'>{{$post->title}}</option>
                                             @endforeach
                                           </select>
                                       </div>
                                      <div class="form-group">
                                           {!! Form::submit('Add Tag', ['class' => 'btn btn-success']) !!}
                                       </div>
                                       {!! Form::close() !!}
                                       {{--=================================================================--}}
                           		</div>

                           		<div class="col-lg-12">
                           		  {{--=================================================================--}}

                                  {!! Form::open(['url' => 'deleteTag']) !!}
                                      <div class="form-group">
                                          <label style="color: #000000">Tag</label>
                                          <select  name="tag_id" class="form-control">
                                          <option default>Select a tag</option>
                                          @foreach($tags as $tag)
                                            <option value='{{$tag->id}}'>{{$tag->tag_name}}</option>

                                            @endforeach
                                          </select>

                                      </div>
                                     <div class="form-group">
                                          {!! Form::submit('Delete Tag', ['class' => 'btn btn-danger']) !!}
                                      </div>
                                      {!! Form::close() !!}
                                       {{--=================================================================--}}
                                  </div>

                                  <div class="col-lg-12">
                                  <div class="content-panel">
                                       <h4>Tags List</h4><hr><table class="table table-hover">


                                           <thead>
                                           <tr>
                                               <th>#</th>
                                               <th>Tag Name</th>
                                               <th>Created At</th>

                                           </tr>
                                           </thead>
                                           <tbody>
                                          @foreach($tags as $tag)
                                           <tr>
                                               <td>{{$tag->id}}</td>
                                               <td>{{$tag->tag_name}}</td>
                                               <td>{{$tag->created_at}}</td>

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