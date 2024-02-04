@extends('theme.main')

@section('pagecss')
@endsection

@php
    $contents = $page->contents;

    $featuredArticles = Article::where('is_featured', 1)->where('status', 'Published')->take(12)->get();
    $featuredArticlesHTML = '<div id="oc-posts" class="owl-carousel posts-carousel carousel-widget posts-md" data-pagi="false" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-lg="4">';

    if ($featuredArticles->count()) {

        foreach ($featuredArticles->chunk(2) as $index => $article) {
            
            $featuredArticlesHTML .= '';
                foreach($article as $a){

                    $imageUrl = (empty($a->thumbnail_url)) ? asset('theme/images/misc/no-image.jpg') : $a->thumbnail_url;

                    $featuredArticlesHTML .= '
                    <div class="oc-item">
                        <div class="entry topmargin-sm">
                            <div class="entry-image">
                                <a href="' . route('news.front.show', $a->slug) . '"><img src="'. $imageUrl .'" alt="Image"></a>
                            </div>
                            <div class="entry-title title-xs nott">
                                <h3><a href="' . route('news.front.show', $a->slug) . '" class="text-white">'. $a->name .'</a></h3>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="icon-calendar3"></i>'. $a->date_posted() .'</li>
                                </ul>
                            </div>
                            <div class="entry-content mt-3 text-white">
                                <p>'. $a->teaser .'</p>
                            </div>
                        </div>
                    </div>';
                }
        }
    }

    $featuredArticlesHTML .= '</div>';
    $featuredArticlesHTML .= '<div class="text-center m-auto w-75">					
                                    <a href="/news" class="button button-border button-rounded ms-0 topmargin-sm button-small button-yellow">Read More</a>
                                </div>';

    $keywords   = ['{Featured Articles}'];
    $variables  = [$featuredArticlesHTML];

    $contents = str_replace($keywords,$variables,$contents);


@endphp

@section('content')
    {!! $contents !!}
@endsection

@section('pagejs')
    <script src="{{ asset('theme/js/scripts/home.js') }}"></script>
@endsection