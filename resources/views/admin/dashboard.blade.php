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
                    <h3 class="panel-title">Tổng Quan</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="metric">
                                <span class="icon"><i class="fa fa-download"></i></span>
                                <p>
                                    <span class="number">{{ $count_article }}</span>
                                    <span class="title">Bài Viết</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="metric">
                                <span class="icon"><i class="fa fa-shopping-bag"></i></span>
                                <p>
                                    <span class="number">{{ $count_category }}</span>
                                    <span class="title">Chuyên Mục</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="metric">
                                <span class="icon"><i class="fa fa-eye"></i></span>
                                <p>
                                    <span class="number">{{ $count_user }}</span>
                                    <span class="title">Người Dùng</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="metric">
                                <span class="icon"><i class="fa fa-bar-chart"></i></span>
                                <p>
                                    <span class="number">{{ $count_ads }}</span>
                                    <span class="title">Quảng Cáo</span>
                                </p>
                            </div>
                        </div>
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
