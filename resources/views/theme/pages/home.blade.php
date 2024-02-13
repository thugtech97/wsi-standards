@extends('theme.main')

@section('pagecss')
@endsection

@php
    $contents = $page->contents;

    $featuredArticles = Article::where('is_featured', 1)->where('status', 'Published')->get();

    if ($featuredArticles->count()) {

        $featuredArticlesHTML = '<section class="py-5 py-lg-6 position-relative overflow-hidden">
				<div class="container "><h2 class="text-center color mb-lg-6">News Updates</h2><div id="oc-posts" class="owl-carousel posts-carousel carousel-widget posts-md" data-margin="20" data-nav="true" data-pagi="true" data-items-xs="1" data-items-md="2" data-items-xl="3">';

        $prefooter = asset('theme/images/pre-footer.jpg');

        foreach ($featuredArticles as $index => $article) {
            $imageUrl = (empty($article->thumbnail_url)) ? asset('theme/images/misc/no-image.jpg') : $article->thumbnail_url;


            $featuredArticlesHTML .= '<div class="oc-item">
							<div class="entry">
								<div class="entry-image">
                                    <a href="'. $article->get_url() .'"><img src="'. $imageUrl .'" alt="Image"></a>
                                </div>
                                <div class="entry-title title-sm nott mt-5">
                                    <h3><a class="text-ts" href="'. $article->get_url() .'">'. $article->name .'</a></h3>
                                </div>
                                <div class="entry-meta mt-4">
                                    <ul class="text-smaller">
                                        <li>Posted on'. $article->date_posted() .'</li>
                                        <li>By'. $article->user->name.'</li>
                                        <li>'. $article->category->name.'</li>
                                    </ul>
                                </div>
                                <div class="entry-content">
                                    <p class="excerpt-2">'. $article->teaser .'</p>
                                </div>
                                <a href="'.$article->get_url().'" class="button button-large button-circle border-bottom ms-0 text-initial nols fw-normal h-bg-color-2">Read More <i class="icon-line-arrow-right ms-2 me-0"></i></a>
                            </div>
                        </div>';

            if (Article::has_featured_limit() && $index >= env('FEATURED_NEWS_LIMIT')) {
                break;
            }
        }

        $featuredArticlesHTML .= '</div><div class="d-flex justify-content-center mt-6">
						<a href="'.route('news.front.index').'" class="button button-xlarge button-circle border-bottom ms-0 text-initial nols fw-normal h-bg-color-2">View all news updates</a>
					</div></div></section>';

        $keywords   = ['{Featured Articles}'];
        $variables  = [$featuredArticlesHTML];

        $contents = str_replace($keywords,$variables,$contents);

    } else {

        $keywords   = ['{Featured Articles}'];
        $variables  = [''];

        $contents = str_replace($keywords,$variables,$contents);
    }




@endphp

@section('content')
    {!! $contents !!}
@endsection

@section('pagejs')

@endsection
