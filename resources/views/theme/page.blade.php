@extends('theme.main')

@section('pagecss')
    <style>
        {{ str_replace(array("'", "&#039;"), "", $page->styles ) }}
    </style>
@endsection

@section('content')
    <div class="container bg-white py-5 py-lg-6">
        <div class="row">
            @if($parentPage)
                @if($page->name !='Products' && $page->parent_page_id != 35)
                <div class="col-lg-3 pe-lg-4">
                    <div class="tablet-view">
                        <div class="card border-0">
                            <div class="side-menu">
                                <ul class="mb-0 pb-0">
                                    @foreach($parentPage->sub_pages as $subPage)
                                        <li @if($subPage->id == $page->id) class="active" @endif>
                                            <a href="{{ $subPage->get_url() }}" class="menu-link"><div>{{ $subPage->name }}</div></a>
                                            @if ($subPage->has_sub_pages())
                                                <ul>
                                                    @foreach ($subPage->sub_pages as $subSubPage)
                                                        <li @if ($subSubPage->id == $page->id) class="active" @endif>
                                                            <a href="{{ $subSubPage->get_url() }}" class="menu-link"><div>{{ $subSubPage->name }}</div></a>
                                                            @if ($subSubPage->has_sub_pages())
                                                                <ul>
                                                                    @foreach ($subSubPage->sub_pages as $subSubSubPage)
                                                                        <li @if ($subSubSubPage->id == $page->id) class="active" @endif>
                                                                            <a href="{{ $subSubSubPage->get_url() }}" class="menu-link"><div>{{ $subSubSubPage->name }}</div></a>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            @endif
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-9">
                    {!! $page->contents !!}
                </div>
                @elseif($page->parent_page_id == 35)
                    <div class="col-12">
                        <div class="container mb-4">
                        	<!--<h2>Product Variants</h2>-->
                        	@foreach($parentPage->sub_pages as $subPage)
                                        <!--<li >-->
                                        <!--    <a href="{{ $subPage->get_url() }}" class="menu-link"><div>{{ $subPage->name }}</div></a>-->
                                        
                                        <!--</li>-->
                                    	<a href="{{ $subPage->get_url() }}" <button class="button button-circle button-border border-color h-bg-color-2 fs-14-f font-primary nott fw-normal @if($subPage->id == $page->id) bg-color text-white @endif" data-dot-number="0">{{ $subPage->name }}</button></a>
                                    @endforeach
                        
                          </div>
                        {!! $page->contents !!}
                    </div>
                @else
                    <div class="col-12">
                        {!! $page->contents !!}
                    </div>
                    
                @endif

            @else
                <div class="col-12">
                    {!! $page->contents !!}
                </div>
            @endif
        </div>
    </div>
@endsection
