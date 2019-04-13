@extends('admin.layout.index')

@section('content')

<!-- MAIN -->
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Thêm Quảng Cáo</h3>
                </div>
                <div class="panel-body">
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
                        <form action="{{ url('admin/ad/edit/'. $ad->id) }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="">Tên</label>
                                <input type="text" name="name" class="form-control" value="{{ $ad->name }}" required="required">
                            </div>
                            <div class="form-group">
                                <label for="">Link</label>
                                <input type="link" name="link" class="form-control" value="{{ $ad->link }}" required="required">
                            </div>
                            <div class="form-group">
                                <label for="">Ảnh (png, jpg, jpeg)</label>
                                <input type="file" name="img" class="form-control" value="{{ $ad->img }}">
                            </div>
                            <div class="form-group">
                                <label for="">Ghi chú</label>
                                <input type="text" name="note" class="form-control" value="{{ $ad->note }}" required="required">
                            </div>
                            <div class="form-group">
                                <label for="">Thứ tự hiển thị</label>
                                <input type="number" name="order" class="form-control" min="0" value="{{ $ad->order }}" required="required">
                            </div>
                            <button type="submit" class="btn btn-primary">Sửa</button>
                            <button type="reset" class="btn btn-primary">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- END OVERVIEW -->
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->

@endsection
