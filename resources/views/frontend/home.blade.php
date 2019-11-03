@extends('frontend.layouts.master')
@section('content')
    @include('frontend._article_list_new', ['articles' => $articles])
@stop