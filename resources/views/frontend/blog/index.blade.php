@extends('frontend.blog.layout')
@section('content')

    <div class="content-wrapper">
        <div class="content-wrapper__inner">
            <div class="main-post-list">
                <ol class="post-list">
                    @foreach($articles as $article)
                        <li>
                            <a  href="{{ route('post.show', $article->id) }}"
                               title="{{$article->title}}">
                                <h2 class="post-list__post-title post-title">{{$article->title}}
                                </h2>
                                <p class="excerpt">{{$article->abstract}}</p>
                                <div class="post-list__meta">
                                    <time datetime="2016-12-20 12:53:11 +0900" class="post-list__meta--date date">
                                        2016-12-20
                                    </time>
                                    • <span class="post-list__meta--tags tags">能工巧匠集</span>
                                </div>
                                <hr class="post-list__divider">
                            </a>
                        </li>
                    @endforeach
                </ol>
                <hr class="post-list__divider "/>
            </div>
        </div>
    </div>
@endsection
