@extends('frontend.layouts.master')
@section('content')
    <div class="col-xl-8 py-5 px-md-5">
        <h2>Search result for <strong>{{$searched->query}}</strong>
            <span class="text-grey">({{$searched->articles->count()}})</span>
        </h2>
    </div>
    @include('frontend._article_list_new', ['articles' => $searched->articles])
@endsection