<!-- resources/views/auth/reset.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <!-- ================================================= -->
    <!-- PLACE YOUR PAGE TITLE BELOW -->
    <!-- ================================================= -->
    <title>Intl Counselling</title>

    <!-- ================================================= -->
    <!-- LINK TO BOOTSTRAP AND CUSTOM CSS -->
    <!-- ================================================= -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('libs/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/owl.transitions.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/faq.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <script src="{{asset('js/prefixfree.min.js')}}"></script>
</head>
<body>

<form method="POST" action="/password/reset">
    {!! csrf_field() !!}
    <input type="hidden" name="token" value="{{ $token }}">
       <div class="body"></div>
    <div class="grad"></div>
    <div class="header" style="margin-left: -50px;">
        <div>Intl<span>Counselling</span></div>
    </div>
    <br>
    <div class="login">
            <input type="email" name="email" placeholder="email" value="{{ old('email') }}">
             <input type="password" name="password">
            <input type="password" name="password_confirmation">
            <input type="submit" value="Reset Password">
                        

             @if (count($errors) > 0)
                       <ul>
                           @foreach ($errors->all() as $error)
                               <li>{{ $error }}</li>
                           @endforeach
                       </ul>
                   @endif
    </div>


</form>
{{--<form method="POST" action="/password/reset">--}}
    {{--{!! csrf_field() !!}--}}
    {{--<input type="hidden" name="token" value="{{ $token }}">--}}

    {{--@if (count($errors) > 0)--}}
        {{--<ul>--}}
            {{--@foreach ($errors->all() as $error)--}}
                {{--<li>{{ $error }}</li>--}}
            {{--@endforeach--}}
        {{--</ul>--}}
    {{--@endif--}}

    {{--<div>--}}
        {{--Email--}}
        {{--<input type="email" name="email" value="{{ old('email') }}">--}}
    {{--</div>--}}

    {{--<div>--}}
        {{--Password--}}
        {{--<input type="password" name="password">--}}
    {{--</div>--}}

    {{--<div>--}}
        {{--Confirm Password--}}
        {{--<input type="password" name="password_confirmation">--}}
    {{--</div>--}}

    {{--<div>--}}
        {{--<button type="submit">--}}
            {{--Reset Password--}}
        {{--</button>--}}
    {{--</div>--}}
{{--</form>--}}
{{--<!-- resources/views/auth/reset.blade.php -->--}}



<!-- ================================================= -->
<!-- LINK TO BOOTSTRAP JQUERY AND CUSTOM JAVASCRIPT FILE -->
<!-- ================================================= -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('libs/owl.carousel.min.js') }}"></script>
@yield('additionalFooter')
<script type="text/javascript" src="{{ asset('scripts/scripts.js') }}"></script>

</body>
</html>



















{{--=====================================================================================--}}




