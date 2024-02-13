<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Stylesheets
    ============================================= -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"><link rel="stylesheet" href="{{ asset('theme/css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('theme/css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('theme/css/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('theme/css/swiper.css') }}" type="text/css" />


    <!-- Demo Specific Stylesheet -->
    <link rel="stylesheet" href="{{ asset('theme/css/finance.css') }}"  type="text/css" />
    <!-- / -->

    <link rel="stylesheet" href="{{ asset('theme/css/font-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('theme/css/et-line.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('theme/css/fontawesome.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('theme/css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('theme/css/magnific-popup.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{asset('theme/css/slick.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{asset('theme/css/slick-theme.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('theme/css/custom.css') }}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{ asset('theme/include/cookie-alert/cookiealert.css') }}" type="text/css"  />


    <style>
    {{ str_replace(array("'", "&#039;"), "", $page->styles ) }}
    </style>

    @if (isset($page->name) && $page->name == 'Home')
        <title>{{ Setting::info()->company_name }}</title>
    @else
        <title>{{ (empty($page->meta_title) ? $page->name:$page->meta_title) }} | {{ Setting::info()->company_name }}</title>
    @endif

    @if(!empty($page->meta_description))
        <meta name="description" content="{{ $page->meta_description }}">
    @endif

    @if(!empty($page->meta_keyword))
        <meta name="keywords" content="{{ $page->meta_keyword }}">
    @endif
    
     <!-- Favicon
    ============================================= -->
    <link rel="icon" href="{{ asset('storage/icons/'.Setting::get_company_favicon_storage_path()) }}" type="image/x-icon">


    @yield('pagecss')

</head>

<body class="stretched">

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

        @include('theme.layouts.header')

        @include('theme.layouts.banner')

        <section id="content">
            @yield('content')
        </section>

        <div class="alert text-center cookiealert show" role="alert" id="popupPrivacy" style="display: none;">
            {!! \Setting::info()->data_privacy_popup_content !!} <a href="{{ route('privacy-policy') }}" target="_blank">Learn more</a>
            <button type="button" id="cookieAcceptBarConfirm" class="btn btn-primary btn-sm acceptcookies px-3 mt-3 mt-lg-0" aria-label="Close">
                I agree
            </button>
        </div>

        @include('theme.layouts.footer')

    </div><!-- #wrapper end -->

    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="icon-line-chevrons-up bg-color h-bg-color-2 shadow rounded-circle"></div>

    <!-- JavaScripts
    ============================================= -->
    <script type="text/javascript">
        var bannerFxIn = "fadeIn";
        var bannerFxOut = "slideOutLeft";
        var bannerCaptionFxIn = "fadeInUp";
        var autoPlayTimeout = 4000;
        var bannerID = "banner";
    </script>

    <script src="{{ asset('theme/js/jquery.js') }}"></script>
    <script src="{{ asset('theme/js/plugins.min.js') }}"></script>

    <!-- Footer Scripts
    ============================================= -->
    <script src="{{ asset('theme/include/cookie-alert/cookiealert.js') }}"></script>
    <script src="{{ asset('theme/js/functions.js') }}"></script>

    <script>
        jQuery(document).ready( function($){

            var lastScrollTop = 0;
            window.addEventListener("scroll", function(event){
                var st = $(this).scrollTop();
                if (st > lastScrollTop){
                    jQuery('#header.sticky-on-scrollup').removeClass('show-sticky-onscroll'); // Down Scroll
                } else {
                    jQuery('#header.sticky-on-scrollup').addClass('show-sticky-onscroll'); // Up Scroll
                }
                lastScrollTop = st;
            });

            $('.services-grid .feature-box').hover(
                function () {
                    $(this).addClass("dark");
                },
                function () {
                    $(this).removeClass("dark");
                }
            );

        });
    </script>

     <script>
        $(document).ready(function() {
            if(localStorage.getItem('popState') != 'shown'){
                $('#popupPrivacy').delay(1000).fadeIn();
            }
        });

        $('#cookieAcceptBarConfirm').click(function() // You are clicking the close button
        {
            $('#popupPrivacy').fadeOut(); // Now the pop up is hidden.
            localStorage.setItem('popState','shown');
        });
    </script>

    @yield('pagejs')


    @if(isset($page) && $page->album && count($page->album->banners) > 0 && $page->album->is_main_banner())
        <script type="text/javascript">
            var bannerID = "banner";
            var bannerFxIn = "{{SettingHelper::bannerTransition($page->album->transition_in)}}";
            var bannerFxOut = "{{SettingHelper::bannerTransition($page->album->transition_out)}}";
            var autoPlayTimeout = "{{$page->album->transition*1000}}";
        </script>
    @elseif(isset($page) && $page->album && count($page->album->banners) > 1 && !$page->album->is_main_banner())
       <script type="text/javascript">
           var bannerID = "banner";
            var bannerFxIn = "{{SettingHelper::bannerTransition($page->album->transition_in)}}";
            var bannerFxOut = "{{SettingHelper::bannerTransition($page->album->transition_out)}}";
            var autoPlayTimeout = "{{$page->album->transition*1000}}";
        </script>
    @else
        <script type="text/javascript">
            var bannerID = "banner";
            var bannerFxIn = "bounceIn";
            var bannerFxOut = "bounceOut";
            var autoPlayTimeout = "4000";
        </script>
    @endif


</body>
</html>
