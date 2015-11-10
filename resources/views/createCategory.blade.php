@extends('index')

@section('central')

<div class="container-fluid" style="padding-left: 50px; padding-right: 50px;" >
    <div class="row" style="padding-top: 100px;">
     <h1>Manage Categories</h1>
<a href="{{url('/auth/logout')}}" style=" float: left; margin-left: 5px;"><div class="tags">Logout</div></a>
      <a href="{{url('/admin')}}" style=" float: left; margin-left: 5px;"><div class="tags">Admin Panel</div></a>
         <a href="{{url('/news/create')}}" style=" float: left; margin-left: 5px;"><div class="tags">Add Post</div></a>
         <a href="{{url('/newMember')}}" style=" float: left; margin-left: 5px;"><div class="tags">Add Member</div></a>
    </div>





    {{--=================================================================--}}

{!! Form::open(['url' => 'admin']) !!}
    <div class="form-group">
        <label style="color: #000000">Category Name:</label>
        {!! Form::text('category', null, ['class' => 'form-control']) !!}
    </div>
   <div class="form-group">
        {!! Form::submit('Add Category', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
    {{--=================================================================--}}





    {{--=================================================================--}}
   {!! Form::open(['url' => 'createTag']) !!}
    <div class="form-group">
        <label style="color: #000000">Tag Name</label>
        {!! Form::text('tag_name', null, ['class' => 'form-control']) !!}
        <label style="color: #000000">Post</label>
        <select name="post_id" class="form-control">
        @foreach($posts as $post)
          <option value='{{$post->id}}'>{{$post->title}}</option>

          @endforeach
        </select> <br/>
    </div>
   <div class="form-group">
        {!! Form::submit('Add Tag', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
    {{--=================================================================--}}










    {{--=================================================================--}}

    {!! Form::open(['url' => 'deleteTag']) !!}
        <div class="form-group">
            <label style="color: #000000">Tag</label>
            <select name="tag_id" class="form-control">
            @foreach($tags as $tag)
              <option value='{{$tag->id}}'>{{$tag->tag_name}}</option>

              @endforeach
            </select> <br/>

        </div>
       <div class="form-group">
            {!! Form::submit('Delete Tag', ['class' => 'btn btn-primary form-control']) !!}
        </div>
        {!! Form::close() !!}
         {{--=================================================================--}}




    {{--=================================================================--}}

    {!! Form::open(['url' => 'deletePost']) !!}
        <div class="form-group">
             <label style="color: #000000">Post To Be Deleted</label>
            <select name="post_id" class="form-control">
            @foreach($posts as $post)
              <option value='{{$post->id}}'>{{$post->title}}</option>

              @endforeach
            </select> <br/>
        </div>
       <div class="form-group">
            {!! Form::submit('Delete Post', ['class' => 'btn btn-primary form-control']) !!}
        </div>
        {!! Form::close() !!}
         {{--=================================================================--}}




        {{--=================================================================--}}
       {{--{!! Form::open(['url' => 'passChange']) !!}--}}
        {{--<div class="form-group">--}}
            {{--<label style="color: #000000">Old Password</label>--}}
            {{--<input type="password" class="form-control" name="oldpass"/>--}}
            {{--<label style="color: #000000">New Password</label>--}}
            {{--<input type="password" class="form-control" name="newpass"/>--}}
            {{--<label style="color: #000000">Confirm New Password</label>--}}
            {{--<input type="password" class="form-control" name="confirmpass"/>--}}
        {{--</div>--}}
       {{--<div class="form-group">--}}
            {{--{!! Form::submit('Change Password', ['class' => 'btn btn-primary form-control']) !!}--}}
        {{--</div>--}}
        {{--{!! Form::close() !!}--}}
        {{--=================================================================--}}




  {{--=================================================================--}}

    {!! Form::open(['url' => 'deleteMember']) !!}
        <div class="form-group">
            <label style="color: #000000">Members</label>
            <select name="id" class="form-control">
            @foreach($members as $m)
              <option value='{{$m->id}}'>{{ $m->name}}</option>

              @endforeach
            </select> <br/>

        </div>
       <div class="form-group">
            {!! Form::submit('Delete Member', ['class' => 'btn btn-primary form-control']) !!}
        </div>
        {!! Form::close() !!}
         {{--=================================================================--}}

{{--=================================================================--}}

    {!! Form::open(['url' => 'deleteCategory']) !!}
        <div class="form-group">
            <label style="color: #000000">Categories:</label>
            <select name="id" class="form-control">
            @foreach($input as $in)
              <option value='{{$in->id}}'>{{ $in->category}}</option>

              @endforeach
            </select> <br/>

        </div>
       <div class="form-group">
            {!! Form::submit('Delete Category', ['class' => 'btn btn-primary form-control']) !!}
        </div>
        {!! Form::close() !!}
         {{--=================================================================--}}

 {{--<div class="row">--}}
    {{--<h4>Categories:</h4>--}}
        {{--<ul style="font-weight: 700">--}}
        {{--@foreach($input as $in)--}}
        {{--<li>{{ $in->category }}</li>--}}
        {{--@endforeach--}}
        {{--</ul>--}}
        {{--</div>--}}



</div>
@stop