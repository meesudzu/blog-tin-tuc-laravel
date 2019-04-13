@extends('layout.index')

@section('style')

<link rel="stylesheet" type="text/css" href="{{ asset('user_assets') }}/styles/contact.css">
<link rel="stylesheet" type="text/css" href="{{ asset('user_assets') }}/styles/contact_responsive.css">

@endsection

@section('container')

<!-- Login/Register -->

<div class="contact">
    <div class="container">

        <div class="row">

            <h3><b>Lỗi!</b> Trang không tồn tại hoặc đã bị xóa bởi quản trị viên!</h3>

        </div>
    </div>
</div>

@endsection

@section('script')

<script src="{{ asset('user_assets') }}/js/init.js"></script>

@endsection
