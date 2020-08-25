@extends('frontend.layouts.master')
@section('content')
    @include('frontend._article_list', ['articles' => $articles])
@stop