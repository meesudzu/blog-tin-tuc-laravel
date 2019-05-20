<!doctype html>
<html lang="en">

<head>
    <title>Dashboard | Blog Tin Tức Tổng Hợp</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{asset('public/assets')}}/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('public/assets')}}/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('public/assets')}}/vendor/linearicons/style.css">
    <link rel="stylesheet" href="{{asset('public/assets')}}/vendor/DataTables/datatables.css">
    <link rel="stylesheet" href="{{asset('public/user_assets')}}/styles/custom.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('public/assets')}}/css/main.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('public/assets')}}/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('public/assets')}}/img/favicon.png">

    @yield('style')

</head>

<body>
    <!-- WRAPPER -->
    <div id="wrapper">

        @include('admin.layout.header')

        @include('admin.layout.menu')

        @yield('content')

    </div>
    <!-- END WRAPPER -->
    <!-- Javascript -->
    <script src="{{asset('public/assets')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('public/assets')}}/vendor/DataTables/datatables.js"></script>
    <script src="{{asset('public/assets')}}/vendor/ckeditor/ckeditor.js"></script>
    <script src="{{asset('public/assets')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{asset('public/assets')}}/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="{{asset('public/assets')}}/scripts/klorofil-common.js"></script>

    @yield('script')
</body>

</html>
