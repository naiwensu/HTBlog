<?php

namespace App\Http\Controllers;

use App\Diary;
use App\Media;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{

    public function index()
    {
        return view('media.create');
    }

    public function upload(Request $request)
    {
        $file = $request->file('file');
        $reference = $request->get('reference');
        if (!$reference) {
            return ['errCode' => 1, 'info' => '上传失败'];
        }

        // 原文件名
        $clientName = $file->getClientOriginalName();
        // 扩展名
        $ext = $file->getClientOriginalExtension();
        // MimeType
        $type = $file->getClientMimeType();
        // 临时绝对路径
        $realPath = $file->getRealPath();
        $filename = date('Y-m-d-H-i-s') . '-' . uniqid() . '.' . $ext;

        if ($reference == 'diary') {
            $diary_id = Cache::get('diary_id');
            if (!$diary_id) {
                $diary = new Diary();
                $diary->user_id = session('user')->id;
                $diary->content = '';
                if(!$diary->save()) {
                    return ['errCode' => 1, 'info' => '上传失败'];
                }
                Cache::put('diary_id', $diary->id, 10);
            }
            if ($file->isValid()) {
                $bool = Storage::disk('uploads')->put($filename, file_get_contents($realPath));
                if ($bool) {
                    $media = new Media();
                    $media->type = $type;
                    $media->diary_id = Cache::get('diary_id');
                    $media->path = $filename;
                    if ($media->save()) {
                        return ['errCode' => 0, 'info' => '上传成功'];
                    } else {
                        return ['errCode' => 1, 'info' => '上传失败'];
                    }
                }
            }

        }
    }

}
