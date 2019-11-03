<div class="col-xl-4 sidebar ftco-animate bg-light pt-5">
    <div class="sidebar-box pt-md-4">
        <form action="{{route('search-article')}}" class="search-form" id="searchBox">
            <div class="form-group">
                <span class="icon icon-search"></span>
                <input type="text" class="form-control" placeholder="Search" name="query_string">
            </div>
        </form>
    </div>
    <div class="sidebar-box ftco-animate">
        <h3 class="sidebar-heading">Categories</h3>
        <ul class="categories">
            @foreach($navCategories as $category)
                <li><a href="{{route('articles-by-category', $category->alias)}}">{{$category->name}}</a></li>
            @endforeach
        </ul>
    </div>

    <div class="sidebar-box ftco-animate">
        <h3 class="sidebar-heading">Popular Articles</h3>
        @foreach($popularArticles as $item)
        <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url({{ $item->article->image }});"></a>
            <div class="text">
                <h3 class="heading"><a href="{{ route('get-article',  $item->article->id,  $item->article->heading)  }}">{{ $item->article->heading }}</a></h3>
                <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> {{ \Carbon\Carbon::parse($item->article->created_at)->format('M d Y')  }}</a></div>
                    <div><a href="#"><span class="icon-person"></span> {{ $item->article->user->name }}</a></div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="sidebar-box ftco-animate">
        <h3 class="sidebar-heading">Tag Cloud</h3>
        <ul class="tagcloud">
            <a href="#" class="tag-cloud-link">animals</a>
            <a href="#" class="tag-cloud-link">human</a>
            <a href="#" class="tag-cloud-link">people</a>
            <a href="#" class="tag-cloud-link">cat</a>
            <a href="#" class="tag-cloud-link">dog</a>
            <a href="#" class="tag-cloud-link">nature</a>
            <a href="#" class="tag-cloud-link">leaves</a>
            <a href="#" class="tag-cloud-link">food</a>
        </ul>
    </div>
</div><!-- END COL -->