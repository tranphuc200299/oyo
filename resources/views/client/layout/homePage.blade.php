<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="{{ URL::asset('css/homePage.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/toastr.min.css') }}" rel="stylesheet">
    <title>oyo</title>
</head>
<body>
<div class="header">
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="logo">
                    <img src="./images/logo.png">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-3">
                <div class="title-right float-lg-right">
                    <h3><b>Home page</b></h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @yield('content')
            </div>
        </div>
    </div>
</div>

<script src="{{ URL::asset('js/jquery.min.js')}}"></script>
<script src="{{ URL::asset('js/toastr.min.js')}}"></script>
<script src="{{ URL::asset('js/popper.min.js')}}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
<script src="{{ URL::asset('js/moment.min.js') }}"></script>
<script src="{{ URL::asset('js/datetimepicker.min.js') }}"></script>
<script src="{{ URL::asset('js/wow.min.js')}}"></script>
<script src="{{ URL::asset('js/jquery.validate.min.js')}}"></script>
<script src="{{ URL::asset('js/main.js')}}"></script>
<script src="{{ URL::asset('js/all.min.js')}}"></script>
@stack('scripts')
<script src="{{ URL::asset('js/homePage.js')}}"></script>
</body>
</html>