@extends('frontend.blog.layout')
@section('content')
    <div class="article">
        <div class="article-content">
            <div class="container" >
                {!! $article->html !!}
            </div>
            <div class="container share-component">
            </div>
        </div>
    </div>
@endsection
