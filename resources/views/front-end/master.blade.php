<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('front-end-assets')}}/assets-2/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('front-end-assets')}}/assets-2/css/animate.css">

    <link rel="stylesheet" href="{{asset('front-end-assets')}}/assets-2/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('front-end-assets')}}/assets-2/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('front-end-assets')}}/assets-2/css/magnific-popup.css">

    <link rel="stylesheet" href="{{asset('front-end-assets')}}/assets-2/css/aos.css">

    <link rel="stylesheet" href="{{asset('front-end-assets')}}/assets-2/css/ionicons.min.css">

    <link rel="stylesheet" href="{{asset('front-end-assets')}}/assets-2/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{asset('front-end-assets')}}/assets-2/css/jquery.timepicker.css">


    <link rel="stylesheet" href="{{asset('front-end-assets')}}/assets-2/css/flaticon.css">
    <link rel="stylesheet" href="{{asset('front-end-assets')}}/assets-2/css/icomoon.css">
    <link rel="stylesheet" href="{{asset('front-end-assets')}}/assets-2/css/style.css">
</head>
<body>

@include('front-end.navBar.header')

@yield('content')

@include('front-end.navBar.footer')


<script src="{{asset('front-end-assets')}}/assets-2/js/jquery.min.js"></script>
<script src="{{asset('front-end-assets')}}/assets-2/js/jquery-migrate-3.0.1.min.js"></script>
<script src="{{asset('front-end-assets')}}/assets-2/js/popper.min.js"></script>
<script src="{{asset('front-end-assets')}}/assets-2/js/bootstrap.min.js"></script>
<script src="{{asset('front-end-assets')}}/assets-2/js/jquery.easing.1.3.js"></script>
<script src="{{asset('front-end-assets')}}/assets-2/js/jquery.waypoints.min.js"></script>
<script src="{{asset('front-end-assets')}}/assets-2/js/jquery.stellar.min.js"></script>
<script src="{{asset('front-end-assets')}}/assets-2/js/owl.carousel.min.js"></script>
<script src="{{asset('front-end-assets')}}/assets-2/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('front-end-assets')}}/assets-2/js/aos.js"></script>
<script src="{{asset('front-end-assets')}}/assets-2/js/jquery.animateNumber.min.js"></script>
<script src="{{asset('front-end-assets')}}/assets-2/js/bootstrap-datepicker.js"></script>
<script src="{{asset('front-end-assets')}}/assets-2/js/jquery.timepicker.min.js"></script>
<script src="{{asset('front-end-assets')}}/assets-2/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{asset('front-end-assets')}}/assets-2/js/google-map.js"></script>
<script src="{{asset('front-end-assets')}}/assets-2/js/main.js"></script>

</body>
</html>
