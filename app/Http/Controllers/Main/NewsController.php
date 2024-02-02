<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Content;

class NewsController extends Controller
{
    public function index()
    {

        $banners = Banner::all();
        $contents = Content::all();
        return view('main', compact('banners', 'contents'));
    }

    public function show($id)
    {
        $banners = Banner::all();
        $content = Content::findOrFail($id);
        return view('news', compact('banners', 'content'));
    }
}
