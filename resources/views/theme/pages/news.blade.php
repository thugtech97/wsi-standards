@extends('theme.main')

@section('pagecss')
    <link rel="stylesheet" href="{{ asset('theme/sysu/plugins/jssocials/jssocials.css') }}" />
    <link rel="stylesheet" href="{{ asset('theme/sysu/plugins/jssocials/jssocials-theme-flat.min.css') }}" />

    <style>
        {{ str_replace(array("'", "&#039;"), "", $news->styles ) }}
    </style>
@endsection

@section('content')
    <div class="container bg-white py-5 py-lg-6">
        <div class="row flex-column-reverse flex-lg-row">
            <div class="col-lg-4 pe-lg-4">
                <div class="position-relative">
                    <div class="border-0 mb-5">
                        <a href="{{ route('news.front.index') }}" class="article-sidebar-link d-flex align-items-center font-primary">
                            Back to news listing <i class="icon-line-arrow-right fs-3 lh-sm color ms-3"></i>
                        </a>
                    </div>
                    <div class="border-0 mb-5">
                        <h3 class="mb-1">News</h3>
                        @foreach($latestArticles as $latest)
                        <div class="border-custom1 py-3">
                            <a href="{{ route('news.front.show',$latest->slug) }}" class="article-sidebar-link fs-13px">
                                {{ $latest->name }}
                            </a>
                            <div class="fs-14px fw-normal color">
                                Posted on {{ date('F d, Y',strtotime($latest->date)) }}
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="article-card">
                    <div class="article-title">
                        <h2>{{ $news->name }}</h2>
                    </div>
                    <div class="article-meta">
                        <div class="entry-meta mb-3">
                            <ul>
                                <li>Posted on {{ Setting::date_for_news_list($news->date) }}</li>
                                <li>By {{$news->user->name}}</li>
                                <li>{{ $news->category->name }}</li>
                            </ul>
                        </div>
                        <hr class="mb-4" />
                    </div>
                    @if($news->thumbnail_url)
                    <div class="article-image">
                        <img class="mb-5 w-100" src="{{ $news->thumbnail_url }}" alt="{{ $news->name }}">
                    </div>
                    @endif
                    <div class="news-desc mb-6">
                        {!! $news->contents !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('pagejs')
    <script>
        $('#frm_search').on('submit', function(e) {
            e.preventDefault();
            console.log('sasasa');
            window.location.href = "{{route('news.front.index')}}?type=searchbox&criteria="+$('#searchtxt').val();
        });
    </script>
@endsection
