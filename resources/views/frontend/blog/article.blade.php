@extends('frontend.blog.layout')
@section('content')
    <div class="article">
        <div class="article-content">
            <h1 class="post-title">{{$article->title}}</h1>
            <div class="container">

                {!! $article->html !!}
                <div class=" share-component">
                </div>
            </div>
            <div class="article-footer"></div>
        </div>
    </div>
@endsection
