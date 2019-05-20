<!-- Home -->
<div class="home">

    <!-- Home Slider -->
    <div class="home_slider_container">
        <div class="owl-carousel owl-theme home_slider">
            @if(isset($sliders))
                @foreach($sliders as $sl)
                    <!-- Slide -->
                    <div class="owl-item home_slider_item">
                        <div class="background_image" style="background-image:url({{ asset('public/upload/slide') }}/{{ $sl->img }})"></div>
                        <div class="home_slider_content text-center">
                            <div class="home_slider_content_inner" data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
                                <div class="home_category"><a>ads</a></div>
                                <div class="home_title">{{ $sl->title }}</div>
                                <div class="home_text">{{ $sl->description }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

        <!-- Home Slider Navigation -->
        <div class="home_slider_nav home_slider_prev trans_200"><i class="fa fa-angle-left trans_200" aria-hidden="true"></i></div>
        <div class="home_slider_nav home_slider_next trans_200"><i class="fa fa-angle-right trans_200" aria-hidden="true"></i></div>
    </div>
</div>
