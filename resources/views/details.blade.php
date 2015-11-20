@extends('index')
{{--#F7F7F7--}}
@section('central')

<div class="row">
<img src="{{ asset('img/tagline.png') }}" class="taglineHead">
</div>

<div class="container-fluid" style="padding-left: 5%; padding-right: 5%;">
<article id="post-18" class=" clearfix post-18 page type-page status-publish hentry">
<div class="entry-content">
 <div id="our-doctor" class="doctors-posts clearfix">
<article id="post-89" class="doctors-single clearfix post-89 doctor type-doctor status-publish has-post-thumbnail hentry">
<div class="col-lg-3 col-md-4 col-sm-12">
<div class="entry-meta common clearfix">
<figure><img src="{{asset("img/emp/$member->image")}}" style="max-width: 100%; padding-top: 25px;"></figure>
<h4 style="float: left;">{{$member->name}}</h4> <br/><br/>
<div class="doctor-departments"></div>
<div class="doc-schedule clearfix">
<p><strong>{{$member->education}}<br/>
</strong></p>

<p><strong>Availability</strong></p>
<strong>
<table class="table worktable">
<tbody>
@for($i = 0; $i < count($availability); $i = $i + 1)
<tr>
<td>{{$availability[$i]}}</td>
</tr>
@endfor
</tbody>
</table>
</strong>
<br/><br/>
</div>
<div class="social-icon clearfix"></div>
</div>
</div>
<div class="col-lg-9 col-md-8 col-sm-12 nopadding">
<h1 class="entry-title">{{$member->name}}</h1>
<div class="entry-content">
<p style="text-align: justify;">{!! $member->content !!}</p>

</div>
</div>
</article>
</div>
</div>
</article>
</div>

@stop