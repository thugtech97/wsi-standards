@php
    $is_video = 0;
    if($page->album->banner_type == 'video'){
        $is_video = 1;
    }
@endphp

<!-- Slider
		============================================= -->
<section id="slider" class="slick-wrapper clearfix">
    <div class="banner-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12" style="padding:0;">
                    <div id="banner" class="home-slider slick-slider">
                        @foreach ($page->album->banners as $banner)
                        <div class="hero-slide dark">
                            <img src="{{ $banner->image_path }}" alt="{{ $banner->title }}">
                            <div class="banner-caption" style="background: linear-gradient(to left, rgba(0,0,0,0.3) 0%, #0096e0 100%);">
                                <div class="container">
                                    <div class="row align-items-centers">
                                        <div class="col-xl-6">
                                            <h2 class="text-initial excerpt-3" data-animate="fadeInUp">{{ $banner->title }}</h2>
                                            <p class="d-none d-sm-block excerpt-3" data-animate="fadeInUp" data-delay="200">{{ $banner->description }}</p>
                                            <div class="d-flex justify-content-start mt-2 mt-sm-4 mt-md-5 mt-lg-5" data-animate="fadeInUp" data-delay="400">
                                                @php
                                                    if($banner->text != ""):
                                                @endphp

                                                    <a href="{{ $banner->url }}" class="button button-light button-xlarge button-circle nols fw-normal text-initial fs-20-f h-bg-color-2 ms-0">{{ $banner->button_text }}</a>

                                                @php
                                                    endif;
                                                @endphp
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- #slider end -->
