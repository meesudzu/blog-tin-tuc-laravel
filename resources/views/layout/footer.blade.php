<!-- Footer -->

<footer class="footer">
    <div class="footer_social">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <ul class="footer_social_list d-flex flex-row align-items-center justify-content-center">
                        <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_content">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('public/user_assets') }}/images/footer.jpg" data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="logo_container">
                        <a href="{{ url('/') }}">
                            <div class="logo"><span>News</span>Blog</div>
                            <div class="logo_sub">Trang Tin Tức & Giải Trí Tổng Hợp</div>
                        </a>
                    </div>
                    <div class="footer_nav_container text-center">
                        <nav class="footer_nav">
                            <ul class="footer_nav_list d-flex flex-md-row flex-column align-items-center justify-content-start">
                                @if(isset($categories))
                                    @foreach($categories as $category)
                                        <li class="level1"><a href="{{ url('category') }}/{{ $category->slug }}">{{ $category->name }}</a></li>
                                    @endforeach
                                @endif
                                <li><a href="{{ url('contact') }}">Liên Hệ</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
