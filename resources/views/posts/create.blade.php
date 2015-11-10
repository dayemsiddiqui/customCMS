@extends('index')

@section('central')

    <div class="row" style="padding: 50px;">
    <br/>
    <h1>Post A New Article</h1>
      <a href="{{url('/auth/logout')}}" style=" float: left; margin-left: 5px;"><div class="tags">Logout</div></a>
            <a href="{{url('/admin')}}" style=" float: left; margin-left: 5px;"><div class="tags">Admin Panel</div></a>
               <a href="{{url('/news/create')}}" style=" float: left; margin-left: 5px;"><div class="tags">Add Post</div></a>
               <a href="{{url('/newMember')}}" style=" float: left; margin-left: 5px;"><div class="tags">Add Member</div></a>
    <hr/>

    {!! Form::open(['url' => 'news', 'files' => true]) !!}
    <div class="form-group">
        <label style="color: #000000">Title</label>
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
        <label style="color: #000000">Author</label>
        {!! Form::text('author', null, ['class' => 'form-control']) !!}
        <label style="color: #000000">Category</label>
        {{--{!! Form::text('category', null, ['class' => 'form-control']) !!}--}}
        <select name="category" class="form-control">
        @foreach($categories as $category)
          <option value='{{$category->id}}'>{{$category->category}}</option>

          @endforeach
        </select> <br/>
        <label style="color: #000000">Content</label>
        {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
        <label style="color: #000000">Upload Image</label>
        {!! Form::file('image', null) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Add Post', ['class' => 'btn btn-primary form-control']) !!}
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
@stop