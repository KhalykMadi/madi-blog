<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ContentRequest;
use App\Http\Services\ContentService;
use App\Models\Content;
use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{

    private ContentService $service;

    public function __construct(ContentService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $contents = Content::all();
        return view('admin.content.index', compact('contents'));
    }

    public function create()
    {
        return view('admin.content.create');
    }

    public function store(ContentRequest $request)
    {
        $data = $request->validated();
        $this->service->storeContent($data);
        return redirect()->route('admin.blog.content.index');
    }

    public function edit(Content $content)
    {
        return view('admin.content.edit', compact('content'));
    }

    public function update(ContentRequest $request, Content $content)
    {
        $data = $request->validated();
        $this->service->updateContent($content, $data);
        return redirect()->route('admin.blog.content.index');
    }

    public function destroy(Content $content)
    {
        $this->service->destroyContent($content);
        return redirect()->route('admin.blog.content.index');
    }
}
