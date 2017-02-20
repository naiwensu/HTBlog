<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{

    public function create(Request $request)
    {
        if(!session('user')) {
            return ['errCode' => 2, 'msg' => "必须先登录"];
        }
        $title = $request->get('title');
        $abstract = $request->get('abstract');
        $thumb = $request->get('thumb');
        $content = $request->get('content');
        if(!$title) {
            return ['errCode' => 1, 'msg' => "文章标题不能为空"];
        }
        if(!$abstract) {
            return ['errCode' => 1, 'msg' => "文章摘要不能为空"];
        }
        if(!$thumb) {
            return ['errCode' => 1, 'msg' => "必须上传缩略图"];
        }
        if(!$content) {
            return ['errCode' => 1, 'msg' => "必须添加内容"];
        }
        $article = new Article();
        $article->title = $title;
        $article->abstract = $abstract;
        $article->thumb = $thumb;
        $article->content = $content;
        $article->user_id = session('user')->id;
        if($article->save()) {
            return ['errCode' => 0, 'msg' => "文章发表成功"];
        } else {
            return ['errCode' => 0, 'msg' => "文章发表失败"];
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->getRequestUri();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
