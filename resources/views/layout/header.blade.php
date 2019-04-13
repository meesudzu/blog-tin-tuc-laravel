<!-- Header -->

<header class="header">

    <!-- Header bar -->
    <div class="header_bar">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_bar_content d-flex flex-row align-items-center justify-content-start">

                        <!-- Logo -->
                        <a href="{{ url('/') }}">
                            <div class="logo"><span>News</span>Blog</div>
                        </a>

                        <div class="header_social ml-auto">
                            <ul class="d-flex flex-row align-items-center justify-content-start">
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
        </div>
    </div>

    <!-- Header Navigation & Search -->
    <div class="header_nav_container" id="header">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_nav_content d-flex flex-row align-items-center justify-content-start">

                        <!-- Logo -->
                        <div class="logo_container">
                            <a href="#">
                                <div class="logo"><span>News</span>Blog</div>
                            </a>
                        </div>

                        <!-- Navigation -->
                        <nav class="main_nav">
                            <ul class="main_nav_list d-flex flex-row align-items-center justify-content-start top-level-menu">
                                @if(isset($categories))
                                @foreach($categories as $category)
                                <li><a href="{{ url('category') }}/{{ $category->slug }}">{{ $category->name }}</a>
                                    @if($category->children != null)
                                    <ul class="second-level-menu">
                                        @foreach($category->children as $child)
                                        <li><a href="{{ url('category') }}/{{ $child->slug }}">{{ $child->name }}</a></li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </li>
                                @endforeach
                                @endif
                                <li><a href="{{ url('contact') }}">Liên Hệ</a></li>
                                @if (Auth::check())
                                    <li><a href="{{ url('profiles') }}">{{ Auth::user()->name }}</a></li>
                                    @if(Auth::user()->permission_id == 1)
                                        <li><a href="{{ url('admin') }}">Cpanel</a></li>
                                    @endif
                                    <li><a href="{{ url('logout') }}">Đăng Xuất</a></li>
                                @else
                                    <li><a href="{{ url('login') }}">Đăng Ký/Đăng Nhập</a></li>
                                @endif
                            </ul>
                        </nav>

                        <!-- Search -->
                        <div class="header_search_container ml-auto">
                            <div class="header_search">
                                <form action="{{ url('search') }}" method="GET" id="header_search_form" class="header_search_form d-flex flex-row align-items-center justfy-content-start">
                                    <div><div class="header_search_activation"><i class="fa fa-search" aria-hidden="true"></i></div></div>
                                    <input type="text" name="keyword" class="header_search_input" placeholder="Search" required="required">
                                </form>
                            </div>
                        </div>

                        <!-- Hamburger -->
                        <div class="hamburger ml-auto menu_mm"><i class="fa fa-bars  trans_200 menu_mm" aria-hidden="true"></i></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Menu -->

<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
    <div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
    <div class="search">
        <form action="#" class="header_search_form menu_mm">
            <input type="search" class="search_input menu_mm" placeholder="Search" required="required">
            <button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
                <i class="fa fa-search menu_mm" aria-hidden="true"></i>
            </button>
        </form>
    </div>
    <nav class="menu_nav">
        <ul class="menu_mm">
            @if(isset($categories))
                @foreach($categories as $category)
                    <li class="menu_mm"><a href="#">{{ $category->name }}</a></li>
                @endforeach
            @endif
            <li class="menu_mm"><a href="{{ url('contact') }}">Liên Hệ</a></li>
            @if (Auth::check())
                <li class="menu_mm"><a href="{{ url('profiles') }}">{{ Auth::user()->name }}</a></li>
                @if(Auth::user()->permission_id == 1)
                    <li class="menu_mm"><a href="{{ url('admin') }}">Cpanel</a></li>
                @endif
                <li class="menu_mm"><a href="{{ url('logout') }}">Đăng Xuất</a></li>
            @else
                <li class="menu_mm"><a href="{{ url('login') }}">Đăng Ký/Đăng Nhập</a></li>
            @endif
        </ul>
    </nav>
    <div class="menu_extra">
        <div class="menu_social">
            <ul>
                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</div>
