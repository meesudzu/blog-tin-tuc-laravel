@extends('layout.index')

@section('style')

<link rel="stylesheet" type="text/css" href="{{ asset('public/user_assets') }}/styles/single.css">
<link rel="stylesheet" type="text/css" href="{{ asset('public/user_assets') }}/styles/single_responsive.css">

@endsection

@section('container')

<!-- Content Container -->

<div class="content_container">
    <div class="container">
        <div class="row">

            @if(!empty($article))
            <!-- Single Post -->

            <div class="col-lg-9">

                <div class="single_post">
                    <div class="post_content">
                        <div class="post_category cat_technology"><a href="{{ url('category') }}/{{ $article->category->slug }}">{{ $article->category->name }}</a></div>
                        <div class="post_title"><a href="{{ url('article') }}/{{ $article->slug }}">{{ $article->title }}</a></div>
                        <div class="post_info d-flex flex-row align-items-center justify-content-start">
                            <div class="post_author d-flex flex-row align-items-center justify-content-start">
                                <div><div class="post_author_image"><img src="{{ asset('public/upload/avatar') }}/{{ $article->user->avatar }}" class="avatar-circle"></div></div>
                                <div class="post_author_name"><a href="#">{{ $article->user->name }}</a></div>
                            </div>
                            <div class="post_date"><a href="#">{{ date('d-m-Y', strtotime($article->created_at)) }}</a></div>
                            <div class="post_comments_num ml-auto"><a href="#">{{ count($article->comment) }} Bình luận</a></div>
                        </div>
                        <div class="post_text">
                            {!! $article->content !!}
                        </div>
                    </div>

                    <!-- Social Share -->
                    <div class="post_share d-flex flex-row align-items-center justify-content-start">
                        <div class="post_share_title">Share:</div>
                        <ul class="post_share_list d-flex flex-row align-items-center justify-content-center">
                            <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>

                    <!-- Comments -->
                    <div class="post_comments_container">
                        <div class="post_comments_title">{{ count($article->comment) }} Bình luận</div>

                        @if(!empty($article->comment))

                        <!-- Comments -->
                        <div class="post_comments">

                            <ul class="post_comments_list">

                                @foreach($article->comment as $comment)
                                <!-- Comment -->
                                <li class="comment">
                                    <div class="comment_info d-flex flex-row align-items-center justify-content-start">
                                        <div><div class="comment_image"><img src="{{ asset('public/upload/avatar') }}/{{ $comment->user->avatar }}" class="avatar-circle"></div></div>
                                        <div class="comment_author"><a href="#">{{ $comment->user->name }}</a></div>
                                    </div>
                                    <div class="comment_content">
                                        <div class="comment_text">
                                            <p>{{ $comment->content }}</p>
                                        </div>
                                    </div>
                                </li>

                                @endforeach
                            </ul>

                        </div>

                        @endif

                    </div>

                    @if(Auth::check())
                    @include('layout.reply')
                    @else
                    <br>
                    <div class="post_comments_title"><a href="{{ url('login') }}">Đăng nhập</a> để gửi bình luận</div>
                    @endif

                    @endif

                </div>

            </div>

            @include('layout.sidebar')
        </div>
    </div>
</div>

@endsection
