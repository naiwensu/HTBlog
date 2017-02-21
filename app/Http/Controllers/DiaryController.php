<?php

namespace App\Http\Controllers;

use App\Diary;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class DiaryController extends Controller
{

    public function index()
    {
        $diaries = Diary::orderBy('created_at', 'DESC')->paginate(5);
        return view('diary.list', ['diaries' => $diaries]);
    }

    public function create(Request $request)
    {
        return view('diary.create');
    }

    public function store(Request $request)
    {
        $content = $request->get('content');
        $diary_id = Cache::pull('diary_id');
        $diary = Diary::first($diary_id);
        if(!$diary) {
            return ['errCode' => 1, 'info' => '发表失败'];
        }
        $diary->content = $content;
        $bool = $diary->save();
        if($bool) {
            return ['errCode' => 0, 'info' => '发表成功'];
        }
    }

}
