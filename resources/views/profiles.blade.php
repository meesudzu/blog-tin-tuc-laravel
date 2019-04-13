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

            <!-- Avatar -->
            <div class="col-lg-6 contact_col">
                <div class="avatar-upload" id="avatar-upload">
                    <center>
                        <img src="{{ asset('upload/avatar') }}/{{ Auth::user()->avatar }}" alt="Avatar" class="avatar" id="avatar">
                        <img src="https://cdn4.iconfinder.com/data/icons/web-ui-color/128/Camera-512.png" alt="" class="avatar-icon" id="avatar-icon">
                        <form action="{{ url('updateAvatar') }}" method="POST" enctype="multipart/form-data" id="form-update">
                            {{ csrf_field() }}
                            <input type="file" name="file" id="file" style="display: none;">
                        </form>
                    </center>
                </div>
            </div>

            <!-- Infomation Form -->
            <div class="col-lg-6 contact_col">
                <div class="contact_form_container">
                    <div class="contact_title">Thông tin cá nhân</div>
                    <form action="{{ url('updateProfiles') }}" id="login_form" class="contact_form" method="POST">
                        {{ csrf_field() }}
                        <input type="text" name="name" class="contact_input" value="{{ Auth::user()->name }}" required="required">
                        <input type="password" name="password" class="contact_input" placeholder="Mật khẩu mới (bỏ trống nếu không thay đổi)">
                        <button class="contact_button trans_200">Thay đổi</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection

@section('script')

<script>
    $(function() {
        var file = $('#file');
        var avatar_upload = $('#avatar-upload');
        var avatar = $('#avatar');
        var avatar_icon = $('#avatar-icon');

        avatar_upload.hover(function() {
            avatar_icon.css('display', 'inline');
        }, function() {
            avatar_icon.css('display', 'none');
        });

        avatar_icon.click(function() {
            file.click();
        });

        file.change(function() {
            var file_data = file.prop('files')[0];
            var form_data = new FormData();
            form_data.append('img', file_data);
            form_data.append('_token', "{{ csrf_token() }}");

            $.ajax({
                url: '{{ url('updateAvatar') }}',
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'post',
                success: function(result) {
                    var json_data = jQuery.parseJSON(result);
                    console.log(json_data)
                    if(json_data.status)
                        avatar.attr('src', '{{ asset('upload/avatar') }}/' + json_data.response);
                    else
                        alert(json_data.response)
                },
                error: function () {
                    alert("Cập nhật thất bại")
                }
            });
        });
    });
</script>

@endsection
