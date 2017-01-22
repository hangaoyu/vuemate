@extends('frontend.blog.layout')
@section('content')

    <div class="content-wrapper">
        <div class="content-wrapper__inner">
            <div class="main-post-list">
                <ol class="post-list">
                    @foreach($articles as $article)
                        <li>
                            <h2 class="post-list__post-title post-title"><a href="/2016/12/concurrency/"
                                                                            title="{{$article->title}}">{{$article->title}}</a>
                            </h2>
                            <p class="excerpt">{{$article->abstract}}</p>
                            <div class="post-list__meta">
                                <time datetime="2016-12-20 12:53:11 +0900" class="post-list__meta--date date">2016-12-20
                                </time>
                                • <span class="post-list__meta--tags tags">能工巧匠集</span><a
                                        href="{{ route('post.show', $article->id) }}">继续阅读</a>
                            </div>
                            <hr class="post-list__divider">
                        </li>
                    @endforeach
                </ol>
                <hr class="post-list__divider "/>
            </div>
        </div>
    </div>
@endsection
