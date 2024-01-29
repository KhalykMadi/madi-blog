<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BannerRequest;
use App\Http\Requests\Admin\ContentRequest;
use App\Http\Services\BannerService;
//use App\Http\Services\ContentService;
use App\Models\Banner;
use App\Models\Content;

class BannerController extends Controller
{

    private BannerService $service;

    public function __construct(BannerService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $banners = Banner::all();
        return view('admin.banner.index', compact('banners'));
    }

    public function create()
    {
        return view('admin.banner.create');
    }

    public function store(BannerRequest $request)
    {
        $data = $request->validated();
        $this->service->storeContent($data);
        return redirect()->route('admin.blog.banner.index');
    }

    public function edit(Banner $banner)
    {
        return view('admin.banner.edit', compact('banner'));
    }

    public function update(BannerRequest $request, Banner $banner)
    {
        $data = $request->validated();
        $this->service->updateContent($banner, $data);
        return redirect()->route('admin.blog.banner.index');
    }

    public function destroy(Banner $banner)
    {
        $this->service->destroyContent($banner);
        return redirect()->route('admin.blog.content.index');
    }
}
