@php $page = $item->page; @endphp
@if (!empty($page) && $item->is_page_type() && $page->is_published())
    @php
        $url = explode("/", url()->current());
        $isActive = false;
        $pageChildren = \App\Models\MenuHasPages::where("parent_id", $page->id)->get();

        if (!$pageChildren->isEmpty()) {
            foreach ($pageChildren as $pageChild) {
                $child = \App\Models\Page::find($pageChild->page_id);

                if ($child && end($url) == $child->slug) {
                    $isActive = true;
                    break;
                }
            }
        }

        //dump($item->parent_id);
    @endphp
    <li class="menu-item @if(url()->current() == $page->get_url() || ($page->id == 1 && url()->current() == env('APP_URL'))) @if(!isset($_GET['type'])) current @endif @endif @if($item->has_sub_menus()) sub-menu @endif @if($isActive) current @endif">
        <a href="{{$page->get_url()}}" class="menu-link">
            <div>
                @if (!empty($page->label))
                    {{ $page->label }} 
                @else
                    {{ $page->name }} 
                @endif
            </div>
        </a>
        @if ($item->has_sub_menus())
            <ul class="sub-menu-container">
                @foreach ($item->sub_pages as $subItem)
                    @include('theme.layouts.menu-item', ['item' => $subItem])
                @endforeach
            </ul>
        @endif
    </li>
@elseif ($item->is_external_type())
    <li class="menu-item @if(isset($_GET['type']) && $_GET['type'] == 'category') @if($item->uri == url()->current().'?type='.$_GET['type'].'&criteria='.$_GET['criteria']) current @endif @endif" >
        <a href="{{ $item->uri }}" class="menu-link" target="{{ $item->target }}"><div>{{ $item->label }}</div></a>
        @if ($item->has_sub_menus())
            <ul class="sub-menu-container">
                @foreach ($item->sub_pages as $subItem)
                    @include('theme.layouts.menu-item', ['item' => $subItem])
                @endforeach
            </ul>
        @endif
    </li>
@endif