<?php

namespace App\Http\Services;


use App\Http\Requests\Admin\ContentRequest;
use App\Models\Content;
use Illuminate\Support\Facades\Storage;

class ContentService
{
    public function storeContent(array $data)
    {
        if (isset($data['img'])) {
            $data['img'] = Storage::disk('public')->put('/images', $data['img']);
        }
        Content::query()->firstOrCreate($data);
    }

    public function updateContent(Content $content, array $data)
    {
        if (isset($data['img'])) {
            $data['img'] = Storage::disk('public')->put('/images', $data['img']);
        }
        $content->update($data);
    }

    public function destroyContent(Content $content)
    {
        $content->delete();
    }

}
