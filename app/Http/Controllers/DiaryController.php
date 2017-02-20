<?php

namespace App\Http\Controllers;

use App\Diary;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class DiaryController extends Controller
{

    public function index()
    {
        $diaries = DB::table('diaries')->paginate(5);
        return view('diary.list', ['diaries' => $diaries]);
        // return $this->hasMany('App\Media');
        // return view('diary.create');
    }

    public function create(Request $request)
    {
        return view('diary.create');
    }

    public function store(Request $request)
    {
        $id = $request->get('id');
        $content = $request->get('content');

    }

}
