<!DOCTYPE html>
<html lang="en">
<head>
<title>News Blog</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Tech Mag template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('public/user_assets') }}/styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="{{ asset('public/user_assets') }}/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('public/user_assets') }}/styles/custom.css">

@yield('style')

</head>
<body>

<div class="super_container">

    @include('layout.header')

    @yield('container')

    @include('layout.footer')

</div>

<script src="{{ asset('public/user_assets') }}/js/jquery-3.2.1.min.js"></script>
<script src="{{ asset('public/user_assets') }}/styles/bootstrap-4.1.2/popper.js"></script>
<script src="{{ asset('public/user_assets') }}/styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="{{ asset('public/user_assets') }}/plugins/greensock/TweenMax.min.js"></script>
<script src="{{ asset('public/user_assets') }}/plugins/greensock/TimelineMax.min.js"></script>
<script src="{{ asset('public/user_assets') }}/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="{{ asset('public/user_assets') }}/plugins/greensock/animation.gsap.min.js"></script>
<script src="{{ asset('public/user_assets') }}/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="{{ asset('public/user_assets') }}/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="{{ asset('public/user_assets') }}/plugins/easing/easing.js"></script>
<script src="{{ asset('public/user_assets') }}/plugins/parallax-js-master/parallax.min.js"></script>
<script src="{{ asset('public/user_assets') }}/js/init.js"></script>

@yield('script')

</body>
</html>
