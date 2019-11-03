@extends('frontend.layouts.master')
@section('title', $article->heading)
@section('content')
	<div class="col-lg-8 px-md-5 py-5">
		<div class="row pt-md-4">
			<h1 class="mb-3">{{$article->heading}}</h1>
			<div class="margin-bottom-10">
				<span class="text-grey">Written {{$article->createdAtHuman}}</span>
				<span class="text-grey">by {{$article->user->name}} on </span>
				<a href="{{route('articles-by-category', $article->category->alias)}}">{{$article->category->name}}</a>
				@if($article->isEditable)
					<a href="{{route('edit-article', $article->id)}}"><span class="fa fa-edit"></span></a>
				@endif
			</div>
			{!! $article->contentAsHtml !!}
			<div class="tag-widget post-tag-container mb-5 mt-5">
				<div class="tagcloud">
					@foreach($article->keywords as $keyword)
						@if($keyword->name)
						<a href="{{route('articles-by-keyword', [$keyword->name])}}" class="tag-cloud-link">{{$keyword->name}}</a>
						@endif
					@endforeach
				</div>
			</div>

			<div class="about-author d-flex p-4 bg-light" style="width: 100%">
				<div class="bio mr-5">
					<img src="{{ get_gravatar($article->user->email, 100) }}" alt="Image placeholder" class="img-fluid mb-4">
				</div>
				<div class="desc">
					<h3>{{ $article->user->name }}</h3>
				</div>
			</div>
		</div>
		@if($article->is_comment_enabled)
			<hr class="margin-bottom-15 margin-top-10">

			<div class="comment-form-wrap pt-5">
				<div id="disqus_thread"></div>
				<script>

                    /**
                     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                    /*
                    var disqus_config = function () {
                    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                    };
                    */
                    (function() { // DON'T EDIT BELOW THIS LINE
                        var d = document, s = d.createElement('script');
                        s.src = 'https://lara-blog-6.disqus.com/embed.js';
                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                    })();
				</script>
				<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

			</div>
		@endif
	</div>
@stop