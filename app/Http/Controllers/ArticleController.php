<?php

namespace App\Http\Controllers;

use App\Article;
use App\Diary;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{

    public function index()
    {
        $articles = Article::orderBy('created_at', 'DESC')->paginate(5);
        return view('article.list', ['articles' => $articles]);
    }

    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('thumb');
        if(!$file) {
            dd("请上传缩略图");
        }
        $title = $request->get('title');
        $abstract = $request->get('abstract');
        $content = $request->get('content');
        // 原文件名
        $clientName = $file->getClientOriginalName();
        // 扩展名
        $ext = $file->getClientOriginalExtension();
        // MimeType
        $type = $file->getClientMimeType();
        // 临时绝对路径
        $realPath = $file->getRealPath();
        $filename = date('Y-m-d-H-i-s') . '-' . uniqid() . '.' . $ext;
        $bool = Storage::disk('uploads')->put($filename, file_get_contents($realPath));
        if ($bool) {
            $article = new Article();
            $article->user_id = session('user')->id;
            $article->title = $title;
            $article->abstract = $abstract;
            $article->thumb = $filename;
            $article->content = $content;
            if($article->save()) {
                return Redirect::to('/');
            } else {
                return Redirect::to(-1);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);
        return view('article.show', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
