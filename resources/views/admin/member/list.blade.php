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
                    <h3 class="panel-title">Quản Lý Thành Viên</h3>
                </div>
                <div class="panel-body">
                    @if(session('message'))
                        <div class="alert alert-{{ session('status') }}">
                            <strong>{{ session('message') }}</strong>
                        </div>
                    @endif
                    <div class="row">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Email</th>
                                    <th>Tên</th>
                                    <th>Avatar</th>
                                    <th>Quyền</th>
                                    <th>Trạng thái</th>
                                    <th><i class="fa-2x fa fa-cog"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td><img src="{{ asset('upload/avatar') }}/{{ $user->avatar }}" width="30" height="30"></td>
                                    <td>{{ $user->permission->name }}</td>
                                    @if($user->status == 0)
                                        <td>Khóa</td>
                                    @else
                                        <td>Bình thường</td>
                                    @endif
                                    <td>
                                        <a href="{{ url('admin/member/block/'.$user->id) }}" title="Block/Unblock"><i class="fa fa-lock"></i>/<i class="fa fa-unlock"></i></a>
                                        <a href="{{ url('admin/member/mod/'.$user->id) }}" title="Thay đổi quyền"><i class="fa fa-arrow-up"></i>/<i class="fa fa-arrow-down"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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
        $('table').DataTable(
        {
            "language": {
                "lengthMenu": "Hiển thị _MENU_",
                "zeroRecords": "Không tìm thấy",
                "info": "Hiển thị trang _PAGE_/_PAGES_",
                "infoEmpty": "Không có dữ liệu",
                "emptyTable": "Không có dữ liệu",
                "infoFiltered": "(tìm kiếm trong tất cả _MAX_ mục)",
                "sSearch": "Tìm kiếm",
                "processing": "Đang tải!",
                "paginate": {
                    "first": "Đầu",
                    "last": "Cuối",
                    "next": "Sau",
                    "previous": "Trước"
                }
            }
        });
    </script>
    <script>
        CKEDITOR.replace( 'summary', {
            extraPlugins: 'easyimage',
            removePlugins: 'image',
            cloudServices_tokenUrl: '',
            cloudServices_uploadUrl: ''
        });
        CKEDITOR.replace( 'content', {
            extraPlugins: 'easyimage',
            removePlugins: 'image',
            cloudServices_tokenUrl: '',
            cloudServices_uploadUrl: ''
        });
    </script>

@endsection
