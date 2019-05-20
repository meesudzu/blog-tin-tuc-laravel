@extends('layout.index')

@section('style')

<link rel="stylesheet" type="text/css" href="{{ asset('public/user_assets') }}/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="{{ asset('public/user_assets') }}/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="{{ asset('public/user_assets') }}/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="{{ asset('public/user_assets') }}/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="{{ asset('public/user_assets') }}/styles/responsive.css">

@endsection

@section('container')

@include('layout.slide')

<!-- Content Container -->

<div class="content_container">

    <!-- Featured Title -->
    <div class="featured_title">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title_container d-flex flex-row align-items-start justify-content-start">
                        <div>
                            <div class="section_title">Bài Viết Nổi Bật</div>
                        </div>
                        <div class="section_bar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <!-- Main Content -->

            <div class="col-lg-9">
                <div class="main_content">

                    <!-- Featured -->

                    <div class="featured">
                        <div class="row">
                            <div class="col-lg-8">
                                @if(isset($highlight_articles))
                                @foreach($highlight_articles as $key => $article)
                                @if($key == 0)
                                <!-- Post -->
                                <div class="post_item post_v_large d-flex flex-column align-items-start justify-content-start">
                                    <div class="post_image"><img src="{{ asset('public/upload/article') }}/{{ $article->thumb }}"></div>
                                    <div class="post_content">
                                        <div class="post_category cat_technology"><a href="{{ url('category') }}/{{ $article->category->slug }}">{{ $article->category->name }}</a></div>
                                        <div class="post_title"><a href="{{ url('article') }}/{{ $article->slug }}">{{ $article->title }}</a></div>
                                        <div class="post_info d-flex flex-row align-items-center justify-content-start">
                                            <div class="post_author d-flex flex-row align-items-center justify-content-start">
                                                <div><div class="post_author_image"><img src="{{ asset('public/upload/avatar') }}/{{ $article->user->avatar }}" class="avatar-circle"></div></div>
                                                <div class="post_author_name"><a href="#">{{ $article->user->name }}</a></div>
                                            </div>
                                            <div class="post_date"><a href="#">{{ date('d-m-Y H:i', strtotime($article->created_at)) }}</a></div>
                                            <div class="post_comments ml-auto"><a href="#">{{ count($article->comment) }} Bình luận</a></div>
                                        </div>
                                        <div class="post_text">
                                            <p>{{ $article->summary }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                @else
                                <!-- Post -->
                                <div class="post_item post_v_small d-flex flex-column align-items-start justify-content-start">
                                    <div class="post_image"><img src="{{ asset('public/upload/article') }}/{{ $article->thumb }}"></div>
                                    <div class="post_content">
                                        <div class="post_category cat_world"><a href="{{ url('category') }}/{{ $article->category->slug }}">{{ $article->category->name }}</a></div>
                                        <div class="post_title"><a href="{{ url('article') }}/{{ $article->slug }}">{{ $article->title }}</a></div>
                                        <div class="post_info d-flex flex-row align-items-center justify-content-start">
                                            <div class="post_author d-flex flex-row align-items-center justify-content-start">
                                                <div><div class="post_author_image"><img src="{{ asset('public/upload/avatar') }}/{{ $article->user->avatar }}" class="avatar-circle"></div></div>
                                                <div class="post_author_name"><a href="#">{{ $article->user->name }}</a></div>
                                            </div>
                                            <div class="post_date"><a href="#">{{ date('d-m-Y', strtotime($article->created_at)) }}</a></div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                                @endif

                            </div>
                        </div>
                    </div>

                    <!-- Technology -->

                    <div class="technology">
                        <div class="section_title_container d-flex flex-row align-items-start justify-content-start">
                            <div>
                                <div class="section_title">Bài Viết Mới</div>
                            </div>
                            <div class="section_bar"></div>
                        </div>
                        <div class="technology_content">

                            @if(isset($new_articles))
                            @foreach($new_articles as $article)
                            <!-- Post -->
                            <div class="post_item post_h_large">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="post_image"><img src="{{ asset('public/upload/article') }}/{{ $article->thumb }}"></div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="post_content">
                                            <div class="post_category cat_world"><a href="{{ url('category') }}/{{ $article->category->slug }}">{{ $article->category->name }}</a></div>
                                            <div class="post_title"><a href="{{ url('article') }}/{{ $article->slug }}">{{ $article->title }}</a></div>
                                            <div class="post_info d-flex flex-row align-items-center justify-content-start">
                                                <div class="post_author d-flex flex-row align-items-center justify-content-start">
                                                    <div><div class="post_author_image"><img src="{{ asset('public/upload/avatar') }}/{{ $article->user->avatar }}" class="avatar-circle"></div></div>
                                                    <div class="post_author_name"><a href="#">{{ $article->user->name }}</a></div>
                                                </div>
                                                <div class="post_date"><a href="#">{{ date('d-m-Y H:i', strtotime($article->created_at)) }}</a></div>
                                                <div class="post_comments ml-auto"><a href="#">{{ count($article->comment) }} Bình luận</a></div>
                                            </div>
                                            <div class="post_text">
                                                {!! $article->summary !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif

                        </div>
                    </div>

                    <!-- World -->

                    <div class="world">
                        <div class="section_title_container d-flex flex-row align-items-start justify-content-start">
                            <div>
                                <div class="section_title">Có Thể Bạn Chưa Đọc</div>
                            </div>
                            <div class="section_bar"></div>
                        </div>
                        <div class="row world_row">
                            <div class="col-lg-11">
                                <div class="row">
                                    @if(isset($random_articles))
                                    @foreach($random_articles as $article)
                                    <div class="col-lg-6">
                                        <!-- Post -->
                                        <div class="post_item post_v_med d-flex flex-column align-items-start justify-content-start">
                                            <div class="post_image"><img src="{{ asset('public/upload/article') }}/{{ $article->thumb }}"></div>
                                            <div class="post_content">
                                                <div class="post_category cat_world"><a href="{{ url('category') }}/{{ $article->category->slug }}">{{ $article->category->name }}</a></div>
                                                <div class="post_title"><a href="{{ url('article') }}/{{ $article->slug }}">{{ $article->title }}</a></div>
                                                <div class="post_info d-flex flex-row align-items-center justify-content-start">
                                                    <div class="post_author d-flex flex-row align-items-center justify-content-start">
                                                        <div><div class="post_author_image"><img src="{{ asset('public/upload/avatar') }}/{{ $article->user->avatar }}" class="avatar-circle"></div></div>
                                                        <div class="post_author_name"><a href="#">{{ $article->user->name }}</a></div>
                                                    </div>
                                                    <div class="post_date"><a href="#">{{ date('d-m-Y H:i', strtotime($article->created_at)) }}</a></div>
                                                    <div class="post_comments ml-auto"><a href="#">{{ count($article->comment) }} Bình luận</a></div>
                                                </div>
                                                <div class="post_text">
                                                    {!! $article->summary !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Load more button -->
                    <div class="load_more">
                        <div class="load_more_button"><a href="{{ url('articles') }}">Đọc thêm</a></div>
                    </div>

                </div>
            </div>

            @include('layout.sidebar')

        </div>
    </div>
</div>

@endsection
