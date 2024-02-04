@php
    $is_video = 0;
    if($page->album->banner_type == 'video'){
        $is_video = 1;
    }
@endphp

<section id="slider" class="slick-wrapper clearfix">
    <div class="banner-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12" style="padding:0;">
                    <div id="banner" class="home-slider slick-slider">
                        @foreach ($page->album->banners as $banner)

                        @if($is_video > 0)
                            <div class="hero-slide dark">
                                <video autoplay="" muted="" loop="" id="myVideo" style="object-fit:none">
                                    <source src="{{ $banner->image_path }}" type="video/mp4">
                                </video>
                                <div class="banner-caption">
                                    <div class="container">
                                        <div class="row align-items-center">
                                            <div class="col-lg-12">
                                                <h2 class="text-center" data-animate="fadeInUp">{{ $banner->title }}</h2>
                                                <p class="d-none d-sm-block text-center mx-wd-750-f mx-auto" data-animate="fadeInUp" data-delay="200">{{ $banner->description }}</p>

                                                @if($banner->url && $banner->button_text) 
                                                <div class="d-flex justify-content-center mt-5" data-animate="fadeInUp" data-delay="400">
                                                    <a href="{{ $banner->url }}" class="button button-large button-border">{{ $banner->button_text }}</a>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="hero-slide dark">
                                <img src="{{ $banner->image_path }}" alt="{{ $banner->title }}">
                                <div class="banner-caption">
                                    <div class="container">
                                        <div class="row align-items-center">
                                            <div class="col-lg-12">
                                                <h2 class="w-50" data-animate="fadeInUp">{{ $banner->title }}</h2>
                                                <p class="d-none d-sm-block mx-wd-750-f w-50" data-animate="fadeInUp" data-delay="200">{{ $banner->description }}</p>
                                                
                                                @if($banner->url && $banner->button_text)
                                                <div class="d-flex mt-5" data-animate="fadeInUp" data-delay="400">
                                                    <a href="{{ $banner->url }}" class="button button-lg btn-dark bg-color rounded-pill mb-5 px-5 border-0">{{ $banner->button_text }} <i class="icon-line-arrow-right color-2 ms-1"></i></a>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>