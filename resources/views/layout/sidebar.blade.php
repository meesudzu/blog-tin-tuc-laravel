 <!-- Sidebar -->

 <div class="col-lg-3">
    <div class="sidebar">

        <!-- Most Viewed -->

        <div class="most_viewed">
            <div class="sidebar_title">Xem Nhiều</div>
            <div class="most_viewed_items">

                @if (!empty($mostViews))
                @foreach($mostViews as $key => $article)
                <!-- Most Viewed Item -->
                <div class="most_viewed_item d-flex flex-row align-items-start justify-content-start">
                    <div><div class="most_viewed_num">{{ '0'. ($key+1) .'.' }}</div></div>
                    <div class="most_viewed_content">
                        <div class="post_category_small cat_video"><a href="{{ url('category') }}/{{ $article->category->slug }}">{{ $article->category->name }}</a></div>
                        <div class="most_viewed_title"><a href="{{ url('article') }}/{{ $article->slug }}">{{ $article->title }}</a></div>
                        <div class="most_viewed_date"><a href="#">{{ date('d-m-Y H:i', strtotime($article->created_at)) }}</a></div>
                    </div>
                </div>
                @endforeach
                @endif

            </div>
        </div>

        <!-- Videos -->
        <div class="sidebar_latest">
            <div class="sidebar_title">VIDEO</div>
            <div class="latest_posts">

                @if(!empty($videos))
                @foreach($videos as $video)
                <!-- Video -->
                <div class="latest_post d-flex flex-row align-items-start justify-content-start">
                    <div><div class="latest_post_image"><img src="{{ asset('upload/article') }}/{{ $video->thumb }}" style="height: 100%; width: 100%;"></div></div>
                    <div class="latest_post_content">
                        <div class="latest_post_title"><a href="{{ url('article') }}/{{ $video->slug }}">{{ $video->title }}</a></div>
                        <div class="latest_post_date">{{ date('d-m-Y H:i', strtotime($video->created_at)) }}</div>
                    </div>
                </div>
                @endforeach
                @endif

            </div>
        </div>

        <!-- ADS -->

        <div class="tags">
            <div class="sidebar_title">ADS</div>

                @if(!empty($ad))
                <img src="{{ asset('upload/ad') }}/{{ $ad->img }}" style="width: 100%; margin-top: 58px;">
                @endif

        </div>

    </div>
</div>
