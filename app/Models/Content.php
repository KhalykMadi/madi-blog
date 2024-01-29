<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Content extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'contents';
    protected $fillable = [
        'category_ru',
        'title_ru',
        'description_ru',
        'category_kz',
        'title_kz',
        'description_kz',
        'category_en',
        'title_en',
        'description_en',
        'img',
    ];
}
