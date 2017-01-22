<?php

namespace App\Http\Controllers\Frontend;


use App\Markdown\Markdown;
use App\Model\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class BlogController extends Controller
{
    protected $markdown;

    public function __construct(Markdown $markdown, Request $request)
    {
        $this->markdown = $markdown;


    }

    public function index()
    {
        $articles = Article::all();

        return view('frontend.blog.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::find($id);
        $html = $this->markdown->markdown($article->body);
        $article['html'] = $html;
        return view('frontend.blog.article', compact('article'));
    }

  

  

}

