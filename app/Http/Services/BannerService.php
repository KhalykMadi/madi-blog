<?php

namespace App\Http\Services;


use App\Models\Banner;
use Illuminate\Support\Facades\Storage;

class BannerService
{
    public function storeContent(array $data)
    {
        if (isset($data['img'])) {
            $data['img'] = Storage::disk('public')->put('/images', $data['img']);
        }
        Banner::query()->firstOrCreate($data);
    }

    public function updateContent(Banner $banner, array $data)
    {
        if (isset($data['img'])) {
            $data['img'] = Storage::disk('public')->put('/images', $data['img']);
        }
        $banner->update($data);
    }

    public function destroyContent(Banner $banner)
    {
        $banner->delete();
    }

}
