@extends('index')
<?php
$months = array("January","January","February", "March", "April", "May","June", "July", "August", "September", "October", "November", "December");
?>
@section('central')
<div class="row">
        <img src="{{ asset('img/tagline.png') }}" class="taglineHead">
        </div>
    <div class="row" style="padding-top:30px;padding-bottom:50px;">
<p style="opacity: 0;">

           <?php
              $some = explode(" ", $posts[0]->created_at);
              $day = explode("-", $some[0])[2];
              $month = explode("-", $some[0])[1];
              if(strlen($posts[0]->content) > 300){
              $posts[0]->content = substr($posts[0]->content, 0, 300);
              $posts[0]->content .= ".......";

              }else{
              //$shit = false;
              }
             // echo "<h1>$posts[0][0]</h1>";
         ?>
         {{$shit =  $posts[0]->image_id}}
</p>
            <div class="row" style="padding-left: 10%;">

                    <div class="col-md-2 col-sm-12">
                    <div class="date">
                    <h4>{{$months[$month]}}</h4>
                    <strong><h1 style="font-weight:700; line-height:10%;">{{$day}}</h1></strong>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">

                @if($shit)

                    <img style="max-width:100%;" src='{{ asset("img/uploaded/$shit") }}' >
                @endif
                        <a href="{{ url('/news', $posts[0]->id) }}"><h1>{{ $posts[0]->title  }}</h1></a>
                        <p>Posted by {{ $posts[0]->author }}</p>
                        <br><br>
                        <p>{!! $posts[0]->content !!}</p>
                        <br>
                         @foreach($tags as $tag)
                        @if($tag->post_id == $posts[0]->id)
                        <a href="{{url("/news/tags/$tag->tag_id")}}">
                        <div class="tags" style="margin-right: 5px; float: left; margin-bottom: 3px;">
                        @foreach($tagnames as $tagname)
                        @if($tagname->id == $tag->tag_id)
                        {{$tagname->tag_name}}
                        @endif
                        @endforeach
                        </div>
                        {{--<br/>--}}
                        @endif
                        @endforeach
                        <br/><br/>
                        <hr style=" border-top: 1px solid #ccc;">

                    </div>
                    </a>
                </div>

                <div class="col-md-4 bladeCategory">
                        <div style="padding-left:10px;padding-right:80px;">
                        <h3>Categories</h3>
                        <br/>
                        <p style="display: none;"> {{$boolIt = false}}</p>
                        @foreach($categories as $category)

                        {{--<div style="color:grey;">--}}
                        @if($boolIt)
                        <hr style=" border-top: 1px solid #ccc;">
                        @endif
                        <p style="display: none"> {{$boolIt = true}}</p>
                        <a href='{{url("/news/category/$category->id")}}'><h4 class="categories" style="line-height:10%; word-wrap: break-word; word-break: break-all;">{{$category->category}}</h4></a>
                        {{--</div>--}}
                        @endforeach
                        {{--<div class="tags">Updates</div>--}}
                    </div>

                </div>
            </div>



            @for ($i = 1; $i < count($posts); $i++)

<p style="opacity: 0;">
         {{ $shit =  $posts[$i]->image_id }}
          <?php $some = explode(" ", $posts[$i]->created_at);
           $day = explode("-", $some[0])[2];
           $month = explode("-", $some[0])[1];
            if(strlen($posts[$i]->content) > 300){
              $posts[$i]->content = substr($posts[$i]->content, 0, 300);
              $posts[$i]->content .= ".......";
             }
           ?>
</p>
             <div class="row" style="padding-left: 10%;">
                    <div class="col-md-2 col-sm-12">
                    <div class="date"   >
                    <h4>{{$months[$month]}}</h4>
                   <strong><h1 style="font-weight:700; line-height:10%;">{{$day}}</h1></strong>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                    @if($shit)
                        <img style="max-width: 100%;" src='{{ asset("img/uploaded/$shit") }}' onerror="this.style.display='none'">
                    @endif
                       <a href="{{ url('/news', $posts[$i]->id) }}"><h1>{{ $posts[$i]->title  }}</h1></a>
                        <p>Posted by {{ $posts[$i]->author }}</p>
                        <br><br>
                        <p>{!! $posts[$i]->content !!}</p>
                        <br>

                        @foreach($tags as $tag)
                        @if($tag->post_id == $posts[$i]->id)
                        <a href="{{url("/news/tags/$tag->tag_id")}}">
                        <div class="tags" style="margin-right: 5px; float: left; margin-bottom: 3px;">
                       @foreach($tagnames as $tagname)
                        @if($tagname->id == $tag->tag_id)
                        {{$tagname->tag_name}}
                        @endif
                        @endforeach
                        </div>
                        </a>
                        @endif
                        @endforeach
                        <br/><br/>
                        <hr style=" border-top: 1px solid #ccc;">
                    </div>

                </div>

                <div class="col-sm-4">
                    <div style="padding-left:10px;padding-right:80px;">

                    </div>

                </div>
            </div>
            @endfor
          <div class="col-sm-12 bladeCategory2">
                                <div style="padding-left:10px;padding-right:80px;">
                                <h3>Categories</h3>
                                <br/>
                                <p style="display: none;"> {{$boolIt = false}}</p>
                                @foreach($categories as $category)

                                {{--<div style="color:grey;">--}}
                                @if($boolIt)
                                <hr style=" border-top: 1px solid #ccc;">
                                @endif
                                <p style="display: none"> {{$boolIt = true}}</p>
                                <a href='{{url("/news/category/$category->id")}}'><h4 class="categories" style="line-height:10%; word-wrap: break-word; word-break: break-all;">{{$category->category}}</h4></a>
                                {{--</div>--}}
                                @endforeach
                                {{--<div class="tags">Updates</div>--}}
                            </div>

                        </div>

        </div>


@stop