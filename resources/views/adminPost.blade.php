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
                      <a class="active" href="{{url('news/create')}}" >
                          <i class="fa fa-book"></i>
                          <span>Manage Posts</span>
                      </a>

                  </li>
                  <li class="sub-menu">
                      <a  href="{{url('/newMember')}}" >
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
          	<h3>Manage Posts</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
          		  {!! Form::open(['url' => 'news', 'files' => true]) !!}
                     <div class="form-group">
                         <label style="color: #000000">Title</label>
                         {!! Form::text('title', null, ['class' => 'form-control']) !!}
                         <label style="color: #000000">Author</label>
                         {!! Form::text('author', null, ['class' => 'form-control']) !!}
                         <label style="color: #000000">Status</label>
                          <select name="show" class="form-control">
                          <option value="1">Publish</option>
                          <option value="0">Draft</option>
                          </select>
                         <label style="color: #000000">Category</label>
                         {{--{!! Form::text('category', null, ['class' => 'form-control']) !!}--}}
                         <select name="category" class="form-control">
                         <option default>Select a category</option>
                         @foreach($categories as $category)
                           <option value='{{$category->id}}'>{{$category->category}}</option>

                           @endforeach
                         </select> <br/>
                         <label style="color: #000000">Content</label>
                         {{--{!! Form::textarea('content', null, ['class' => 'form-control']) !!}--}}
                         <textarea name="content" id="mytextarea"></textarea>
                         <label style="color: #000000">Upload Image</label>
                         {!! Form::file('image', null) !!}
                          <label style="color: #000000">Tags:</label>
                             <select class="multiple form-control" multiple="multiple" name="tags[]">
                               {{$selected = ""}}
                               @foreach($tagnames as $tagname)
                                   <option value="{{$tagname->tag_name}}">{{$tagname->tag_name}}</option>
                               @endforeach
                             </select>
                     </div>

                     <div class="form-group">
                         {!! Form::submit('Add Post', ['class' => 'btn btn-success']) !!}
                     </div>
                     {!! Form::close() !!}

                     @if ($errors->any())
                         <ul class="alert alert-danger">
                             @foreach($errors->all() as $error)
                                 <li>{{$error}}</li>
                             @endforeach
                         </ul>
                     @endif
          		</div>

          		<div class="col-lg-12">
          		 {{--=================================================================--}}

                  {{--=================================================================--}}

                      {!! Form::open(['url' => 'deletePost']) !!}
                          <div class="form-group">
                               <label style="color: #000000">Post To Be Deleted</label>
                              <select name="post_id" class="form-control">
                              <option value=''>Select a post</option>
                              @foreach($posts as $post)
                                <option value='{{$post->id}}'>{{$post->title}}</option>
                                @endforeach
                              </select>
                          </div>
                         <div class="form-group">
                              {!! Form::submit('Delete Post', ['class' => 'btn btn-danger']) !!}
                          </div>
                          {!! Form::close() !!}
                           {{--=================================================================--}}
                 </div>


                 <div class="col-lg-12">
                 {{--=================================================================--}}

                   {{--=================================================================--}}

                       {!! Form::open(['url' => 'editPost']) !!}
                           <div class="form-group">
                                <label style="color: #000000">Edit</label>
                               <select name="post_id" class="form-control">
                               <option value=''>Select a post</option>
                               @foreach($posts as $post)
                                 <option value='{{$post->id}}'>{{$post->title}}</option>
                                 @endforeach
                               </select>
                           </div>
                          <div class="form-group">
                               {!! Form::submit('Edit Post', ['class' => 'btn btn-success']) !!}
                           </div>
                           {!! Form::close() !!}
                            {{--=================================================================--}}
                  </div>


                 <div class="col-lg-12">
                 <div class="content-panel">
                      <h4>Posts</h4><hr><table class="table table-hover">


                          <thead>
                          <tr>
                              <th>#</th>
                              <th>Title</th>
                              <th>Category</th>
                              <th>Created At</th>

                          </tr>
                          </thead>
                          <tbody>
                           @foreach($posts as $post)
                          <tr>
                              <td>{{$post->id}}</td>
                              <td>{{$post->title}}</td>
                              <td>{{$post->category}}</td>
                              <td>{{$post->created_at}}</td>

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

  </section>

@include('adminFooter')
