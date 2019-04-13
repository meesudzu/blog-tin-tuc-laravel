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
                    <h3 class="panel-title">Thêm Bài Viết</h3>
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
                        <form action="{{ url('admin/article/add') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="">Chuyên mục</label>
                                <select name="cat_id" id="inputCat_id" class="form-control" required="required">
                                    @foreach($categories as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Tiêu đề</label>
                                <input type="text" name="title" class="form-control" placeholder="Tiêu đề" required="required">
                            </div>
                            <div class="form-group">
                                <label for="">Ảnh (png, jpg, jpeg)</label>
                                <input type="file" name="thumb" class="form-control" id="" required="required">
                            </div>
                            <div class="form-group">
                                <label for="">Tóm tắt</label>
                                <textarea name="summary" id="summary" class="form-control" rows="5" required="required"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Nội dung</label>
                                <textarea name="content" id="content" class="form-control" rows="10" required="required"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Nguồn:</label>
                                <input type="text" name="source" class="form-control" placeholder="example.com">
                            </div>
                            <div class="form-group">
                                <label for="">Nổi bật</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="is_highlight" id="inputIs_hightlight" value="0" checked="">
                                        Không
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="is_highlight" id="inputIs_hightlight" value="1">
                                        Có
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Thêm</button>
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

@section('script')

<script>
    // CKEDITOR.replace( 'summary' );
    CKEDITOR.replace( 'content' );
</script>

@endsection
