<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use YuanChao\Editor\EndaEditor;

class ArticleController extends Controller
{


    public function create()
    {
        return view('backend.blog.create');
    }

    public function imagesStore()
    {
       
        // endaEdit 为你 public 下的目录 update 2015-05-19
        Log::info('aaa');
        $data = EndaEditor::uploadImgFile('uploads');
        Log::info($data);
        return json_encode($data);
    }

    public function store(Request $request)
    {
        Article::create($request->all());
        return back()->with(['success' => '添加成功']);
    }
}

