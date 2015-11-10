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

<form method="POST" action="/auth/login">
    {!! csrf_field() !!}

       <div class="body"></div>
    <div class="grad"></div>
    <div class="header" style="margin-left: -50px;">
        <div>Intl<span>Counselling</span></div>
    </div>
    <br>
    <div class="login">
             <input type="email" name="email" placeholder="email" value="{{ old('email') }}">
             <input type="password" placeholder="password" name="password" id="password">
            {{--<input type="password" placeholder="password" name="password"><br>--}}
            <input type="submit" value="Login"> <br/> <br/>
            <a href="{{url('password/email')}}" style="color: #ffffff;">Forgot Password?</a>
    </div>

    {{--<div>--}}
        {{--Email--}}

    {{--</div>--}}

    {{--<div>--}}
        {{--Password--}}
        {{--<input type="password" name="password" id="password">--}}
    {{--</div>--}}

    {{--<div>--}}
        {{--<input type="checkbox" name="remember"> Remember Me--}}
    {{--</div>--}}

    {{--<div>--}}
        {{--<button type="submit">Login</button>--}}
    {{--</div>--}}
</form>



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
