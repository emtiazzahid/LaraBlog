<div class="col-xl-8 py-5 px-md-5">
    <div class="row pt-md-4">
        <div class="col-md-12">
            @forelse($articles as $article)
            <div class="blog-entry ftco-animate d-md-flex">
                <a href="{{route('get-article', [$article->id, make_slug($article->heading)])}}" class="img img-2" style="background-image: url({{ $article->image ? asset('storage/app/articles/'.$article->image) : '/images/article-placeholder.png' }});"></a>
                <div class="text text-2 pl-md-4">
                    <h3 class="mb-2"><a href="{{route('get-article', [$article->id, make_slug($article->heading)])}}">{{$article->heading}}</a></h3>
                    <div class="meta-wrap">
                        <p class="meta">
                            <span><i class="icon-calendar mr-2"></i>{{$article->publishedAtHuman}}</span>
                            <span><a href="{{route('articles-by-category', $article->category->alias)}}"><i class="icon-folder-o mr-2"></i>{{$article->category->name}}</a></span>
                            {{--<span><i class="icon-comment2 mr-2"></i>5 Comment</span>--}}
                        </p>
                    </div>
                    {{--<p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>--}}
                    {{--<p><a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>--}}
                </div>
            </div>
            @empty
                <div class="row text-grey">
                    <div class="col-sm-12"><h3>Not Available</h3></div>
                </div>
            @endforelse
        </div>
    </div><!-- END-->
    {{method_exists($articles, 'links') ? $articles->links('pagination.frontend') : ''}}
</div>
