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
          	<h3>Dashboard</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
          		  {!! Form::open(['url' => 'editedPost', 'files' => true]) !!}
                     <div class="form-group">
                         <input type="hidden" name="id" value="{{$post->id}}"/>
                         <label style="color: #000000">Title</label>
                         {{--{!! Form::text('title', null, ['class' => 'form-control', 'value' => '$post->title']) !!}--}}
                         <input class="form-control" name="title" value="{{$post->title}}" type="text"/>
                         <label style="color: #000000">Author</label>
                         {{--{!! Form::text('author', null, ['class' => 'form-control']) !!}--}}
                         <input class="form-control" name="author" value="{{$post->author}}" type="text"/>
                         <label style="color: #000000">Status</label>
                           <select name="show" class="form-control">
                           @if($post->show)
                           <option selected value="1">Publish</option>
                           <option value="0">Draft</option>
                           @else
                           <option value="1">Publish</option>
                           <option selected value="0">Draft</option>
                           @endif
                           </select>
                         <label style="color: #000000">Category</label>
                         {{--{!! Form::text('category', null, ['class' => 'form-control']) !!}--}}
                         <select name="category" class="form-control">
                         @foreach($categories as $category)
                           <option value='{{$category->id}}'>{{$category->category}}</option>

                           @endforeach
                         </select> <br/>
                         <label style="color: #000000">Content</label>
                         {{--{!! Form::textarea('content', null, ['class' => 'form-control']) !!}--}}
                         {{--<textarea name="content" class="form-control" cols="30" rows="10">{{$post->content}}</textarea>--}}
                         <textarea name="content" id="mytextarea">{{$post->content}}</textarea>
                         <label style="color: #000000">Upload Image</label>
                         {!! Form::file('image', null) !!}
                         <label style="color: #000000">Tags:</label>
                            <select class="multiple form-control" multiple="multiple" name="tags[]">
                              {{$selected = ""}}
                              @foreach($tagnames as $tagname)
                                  @foreach($tagsId as $tagId)
                                  @if($tagname->id == $tagId->tag_id)
                                  {{$selected = "selected"}}
                                  <?php break; ?>
                                  @else
                                  {{$selected = ""}}
                                  @endif
                                  @endforeach
                                  <option value="{{$tagname->tag_name}}" {{$selected}}>{{$tagname->tag_name}}</option>
                              @endforeach
                            </select>
                     </div>

                     <div class="form-group">
                         {!! Form::submit('Update Post', ['class' => 'btn btn-primary form-control']) !!}
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
          	</div>
			
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->

      <!--footer end-->
  </section>




  @include('adminFooter')