<!-- LEFT SIDEBAR -->
<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="{{ url('admin') }}" class="active"><i class="lnr lnr-home"></i> <span>Trang chủ</span></a></li>
                <li>
                    <a href="#subCategory" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Quản lý chuyên mục</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="subCategory" class="collapse ">
                        <ul class="nav">
                            <li><a href="{{ url('admin/category') }}" class="">Danh sách</a></li>
                            <li><a href="{{ url('admin/category/add') }}" class="">Thêm</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#subPost" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Quản lý bài viết</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="subPost" class="collapse ">
                        <ul class="nav">
                            <li><a href="{{ url('admin/article') }}" class="">Danh sách</a></li>
                            <li><a href="{{ url('admin/article/add') }}" class="">Thêm</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="{{ url('admin/member') }}" class=""><i class="lnr lnr-cog"></i> <span>Quản lý thành viên</span></a></li>
                <li>
                    <a href="#subAds" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Quản lý quảng cáo</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="subAds" class="collapse ">
                        <ul class="nav">
                            <li><a href="{{ url('admin/ad') }}" class="">Danh sách</a></li>
                            <li><a href="{{ url('admin/ad/add') }}" class="">Thêm</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#subSlide" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Quản lý slide ảnh</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="subSlide" class="collapse ">
                        <ul class="nav">
                            <li><a href="{{ url('admin/slide') }}" class="">Danh sách</a></li>
                            <li><a href="{{ url('admin/slide/add') }}" class="">Thêm</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="{{ url('admin/comment') }}" class=""><i class="lnr lnr-dice"></i> <span>Quản lý bình luận</span></a></li>
            </ul>
        </nav>
    </div>
</div>
<!-- END LEFT SIDEBAR -->
