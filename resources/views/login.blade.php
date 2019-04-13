@extends('layout.index')

@section('style')

<link rel="stylesheet" type="text/css" href="{{ asset('user_assets') }}/styles/contact.css">
<link rel="stylesheet" type="text/css" href="{{ asset('user_assets') }}/styles/contact_responsive.css">

@endsection

@section('container')

<!-- Login/Register -->

<div class="contact">
    <div class="container">

        @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">
                <strong>Lỗi:</strong> {{ $error }} <br>
            </div>
        @endforeach
        @endif
        @if(session('message'))
            <div class="alert alert-{{ session('status') }}">
                <strong>{{ session('message') }}</strong>
            </div>
        @endif

        <div class="row">

            <!-- Register -->
            <div class="col-lg-6 contact_col">
                <div class="contact_form_container">
                    <div class="contact_title">Đăng Ký</div>
                    <form action="{{ url('register') }}" id="register_form" class="contact_form" method="POST">
                        {{ csrf_field() }}
                        <input type="text" name="name" class="contact_input" placeholder="Tên" required="required">
                        <input type="email" name="email" class="contact_input" placeholder="E-mail" required="required">
                        <input type="password" name="password" class="contact_input" placeholder="Mật khẩu" required="required">
                        <input type="password" name="password_confirmation" class="contact_input" placeholder="Nhập lại mật khẩu" required="required">
                        <button class="contact_button trans_200">Gửi</button>
                    </form>
                </div>
            </div>

            <!-- Login Form -->
            <div class="col-lg-6 contact_col">
                <div class="contact_form_container">
                    <div class="contact_title">Đăng Nhập</div>
                    <form action="{{ url('login') }}" id="login_form" class="contact_form" method="POST">
                        {{ csrf_field() }}
                        <input type="email" name="email" class="contact_input" placeholder="E-mail" required="required">
                        <input type="password" name="password" class="contact_input" placeholder="Mật khẩu" required="required">
                        <button class="contact_button trans_200">Gửi</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
