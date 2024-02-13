@php
    $photoUrl = (isset($page->album->banners) && count($page->album->banners) == 1) ? $page->album->banners[0]->image_path : $page->image_url;
@endphp

<!-- Slider
		============================================= -->
<section id="slider" class="slick-wrapper clearfix">
    <div class="banner-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12" style="padding:0;">
                    <div class="sub-banner-caption dark">
                        <div class="container" style="position: relative;">
                            <h2 class="excerpt-1">{{$page->name}}</h2>
                            <div class="sub-banner-flex">
                                @if(isset($breadcrumb))
                                    <ol class="breadcrumb nobottommargin flex-nowrap justify-content-start">
                                        @foreach($breadcrumb as $link => $url)
                                            @if($loop->last)
                                                <li class="breadcrumb-item active" aria-current="page">{{$link}}</li>
                                            @else
                                                <li class="breadcrumb-item"><a href="{{$url}}">{{$link}}</a></li>
                                            @endif
                                        @endforeach
                                    </ol>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div id="banner" class="slick-slider">
                        <div class="hero-slide dark">
                            <div class=""></div>
                            <img src="{{$photoUrl}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- #slider end -->
