<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="WebFocus Solutions Inc." />

	<!-- Stylesheets
	============================================= -->
	<link rel="stylesheet" href="{{ asset('theme/css/bootstrap.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('theme/css/style.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('theme/css/swiper.css') }}" type="text/css" />

	<!-- Construction Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{ asset('theme/css/demo.css') }}" type="text/css" />
	<!-- / -->
	
	<link rel="stylesheet" href="{{ asset('theme/css/dark.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('theme/css/font-icons.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('theme/css/animate.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('theme/css/magnific-popup.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('theme/css/slick.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('theme/css/slick-theme.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('theme/css/fontawesome.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('theme/css/cookiealert.css') }}" type="text/css"  />
	
	<link rel="stylesheet" href="{{ asset('theme/css/custom.css') }}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	
	<link rel="icon" href="{{ asset('storage/icons/'.Setting::getFaviconLogo()->website_favicon) }}" type="image/x-icon">

	<style>
        @php
            $jsStyle = $page->styles;
            echo $jsStyle;
        @endphp
    </style>

	<!-- Document Title
	============================================= -->
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

    @yield('pagecss')

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">
		
		<!-- Header
		============================================= -->
		@include('theme.layouts.header')
		<!-- #header end -->

		<!-- Slider
		============================================= -->
		@include('theme.layouts.banner')
		
		<!-- #slider end -->

		<!-- Content
		============================================= -->
		<section id="website-content">
			@yield('content')
		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		@include('theme.layouts.footer')<!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- Cookie
	============================================= -->
	<div class="alert text-center cookiealert" role="alert" id="popupPrivacy" style="display: none;">
		{!! \Setting::info()->data_privacy_popup_content !!} <a href="{{ route('privacy-policy') }}" target="_blank">Learn more</a>
		<button type="button" id="cookieAcceptBarConfirm" class="btn btn-primary btn-sm acceptcookies px-3" aria-label="Close">
			I agree
		</button>
	</div><!-- #cookie end -->
	
	<!-- JavaScripts
	============================================= -->
	<script src="{{ asset('theme/js/jquery.js') }}"></script>
	<script src="{{ asset('theme/js/plugins.min.js') }}"></script>

	@include('theme.layouts.banner-scripts')
	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript">
        /*var bannerFxIn = "bounceIn";
        var bannerFxOut = "bounceOut";
        var bannerCaptionFxIn = "fadeInUp";
        var autoPlayTimeout = "4000";
        var bannerID = "banner";*/
    </script>

	<script src="{{ asset('theme/js/slick.js') }}"></script>
	<script src="{{ asset('theme/js/slick.extension.js') }}"></script>
	<script src="{{ asset('theme/js/cookiealert.js') }}"></script>
	<script src="{{ asset('theme/js/functions.js') }}"></script>
	
	@yield('pagejs')

</body>
</html>