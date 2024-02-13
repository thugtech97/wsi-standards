
<!-- Header
		============================================= -->
<header id="header" class="sticky-on-scrollup">
    <div id="header-wrap">
        <div class="container">
            <div class="header-row justify-content-between">

                <!-- Logo
                ============================================= -->
                <div id="logo" class="mx-0 me-lg-4 me-xl-5 order-2 order-lg-1">
                    <a href="{{ route('home') }}" class="standard-logo"><img src="{{ asset('storage/logos/'.Setting::get_company_logo_storage_path()) }}" alt="{{ Setting::info()->company_name }}" 
                             onerror="handleBrokenImage(this, '{{ Setting::info()->company_name }}')"></a>

                </div><!-- #logo end -->

                <div id="primary-menu-trigger" class="order-1">
                    <svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
                </div>

                <div class="header-misc order-3">
                    <div id="top-search" class="header-misc-icon">
                        <a href="#" id="top-search-trigger">
                            <i class="icon-line-search color fs-24-f"></i>
                            <i class="icon-line-cross color fs-28-f"></i>
                        </a>
                    </div>
                </div>

                <!-- Primary Navigation
                ============================================= -->
                <nav class="primary-menu me-lg-auto with-arrows order-4 order-lg-2">

                    @include('theme.layouts.menu')

                </nav><!-- #primary-menu end -->
                <form class="top-search-form" action="{{ route('search') }}" method="get">
                    <input type="text" name="keyword" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
                </form>

            </div>
        </div>
    </div>
    <div class="header-wrap-clone"></div>
</header><!-- #header end -->
<script>
    function handleBrokenImage(img, companyName) {
        img.style.display = 'none';
        var container = img.parentElement;
        container.innerHTML = '<p>' + companyName + '</p>';
    }
</script>
