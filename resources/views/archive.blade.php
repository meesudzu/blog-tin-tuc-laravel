@extends('layout.index')

@section('style')

<link rel="stylesheet" type="text/css" href="{{ asset('public/user_assets') }}/styles/category.css">
<link rel="stylesheet" type="text/css" href="{{ asset('public/user_assets') }}/styles/category_responsive.css">

@endsection

@section('container')

<!-- Content Container -->

<div class="content_container">

    <!-- Featured Posts -->
    <div class="featured_title">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title_container d-flex flex-row align-items-start justify-content-start">
                        <div>
                            <div class="section_title">Tất cả bài viết</div>
                        </div>
                        <div class="section_bar"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9">

                    <div class="posts">

                        @if(!empty($articles))
                        @foreach($articles as $article)
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
                                            <div class="post_date"><a href="#">{{ date('d-m-Y', strtotime($article->created_at)) }}</a></div>
                                            <div class="post_comments ml-auto"><a href="#">{{ count($article->comment) }} Bình luận</a></div>
                                        </div>
                                        <div class="post_text">
                                            <p>{{ $article->summary }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{ $articles->links() }}
                        @endif

                    </div>

                </div>

                <!-- Sidebar -->
                @include('layout.sidebar')
            </div>
        </div>
    </div>
</div>

@endsection
