@extends('theme.main')

@section('pagecss')
@endsection

@section('content')
<div class="py-5 py-lg-6 position-relative z-2">
    <div class="container">
        <div class="row">
            <span onclick="closeNav()" class="dark-curtain"></span>
            <div class="col-lg-12 col-md-5 col-sm-12">
                <span onclick="openNav()" class="button button-small button-circle border-bottom ms-0 text-initial nols fw-normal h-bg-color-2 noleftmargin d-lg-none mb-4"><span class="icon-chevron-left me-2"></span> Filter</span>
            </div>
            <div class="col-lg-4 pe-lg-5">
                <div class="tablet-view">
                    <a href="javascript:void(0)" class="closebtn d-block d-lg-none" onclick="closeNav()">&times;</a>
                    <div class="border-0 mb-5">
                        <h3 class="mb-3">Search</h3>
                        <div class="search">
                            <form class="mb-0" id="frm_search">
                                <div class="input-group pb-5">
                                    <input type="text" name="search" id="searchtxt" class="form-control" placeholder="Search news" aria-label="Search news" aria-describedby="button-addon2" />
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><span class="icon-search"></span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="border-0 mb-5">
                        <h3 class="mb-3">Categories</h3>
                        {!!$categories!!}
                    </div>

                    <div class="border-0 mb-5">
                        <h3 class="mb-3">News</h3>
                        <div class="side-menu">
                            {!! $dates !!}
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-8">
                @if(isset($_GET['type']))
                    @if($_GET['type'] == 'searchbox')
                        @if($totalSearchedArticle > 0)
                            <div class="style-msg successmsg">
                                <div class="sb-msg"><i class="icon-thumbs-up"></i><strong>Woo hoo!</strong> We found <strong>(<span>{{ $totalSearchedArticle }}</span>)</strong> matching results.</div>
                            </div>
                        @else
                            <div class="style-msg2 errormsg">
                                <div class="msgtitle p-0 border-0">
                                    <div class="sb-msg">
                                        <i class="icon-thumbs-up"></i><strong>Uh oh</strong>! <span><strong>{{ app('request')->input('criteria') }}</strong></span> you say? Sorry, no results!
                                    </div>
                                </div>
                                <div class="sb-msg">
                                    <ul>
                                        <li>Check the spelling of your keywords.</li>
                                        <li>Try using fewer, different or more general keywords.</li>
                                    </ul>
                                </div>
                            </div>
                        @endif
                    @endif
                @endif
                @forelse($articles as $article)
                    <div class="news-card mb-6 row" data-animate="fadeIn">
                        <div class="col-lg-5">
                            <div class="news-image">
                                @if($article->thumbnail_url)
                                   <img class="w-100 h-100 position-relative position-lg-absolute inset-0 object-position-center object-fit-cover" src="{{ $article->thumbnail_url }}" alt="{{ $article->name }}">
                                @else
                                    <img class="w-100 h-100 position-relative position-lg-absolute inset-0 object-position-center object-fit-cover" src="{{ asset('/images/placeholder.jpg')}}" alt="{{ $article->name }}">
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-7 ps-lg-4">
                            <div class="news-title mt-4 mt-lg-0 mt-md-0">
                                <a href="{{ route('news.front.show',$article->slug) }}">{{ $article->name }}</a>
                                <div class="entry-meta mb-3">
                                    <ul class="text-smaller">
                                        <li>Posted on {{ date('F d, Y',strtotime($article->date)) }}</li>
                                        <li>By {{ $article->user->name }}</li>
                                        <li>{{ $article->category->name }}</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="news-desc">
                                <p class="card-text fs-15px excerpt-2 mb-3">{{$article->teaser}}</p>
                            </div>
                            <div class="d-flex flex-column-reverse flex-lg-row justify-content-between align-items-start align-items-lg-center">
                                <a href="{{ route('news.front.show',$article->slug) }}" class="button button-large button-circle border-bottom ms-0 text-initial nols fw-normal h-bg-color-2">Read More <i class="icon-line-arrow-right ms-2 me-0"></i></a>
                            </div>
                        </div>
                        <hr class="mt-4">
                    </div>
                @empty

                @endforelse

            </div>
        </div>
    </div>
</div>

@endsection

@section('pagejs')
    <script>
        $('#frm_search').on('submit', function(e) {
            e.preventDefault();
            window.location.href = "{{route('news.front.index')}}?type=searchbox&criteria="+$('#searchtxt').val();
        });
    </script>
@endsection
