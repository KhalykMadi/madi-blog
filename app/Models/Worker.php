<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;

    protected $table = 'workers';
    protected $fillable = [
        'name',
        'surname',
        'email',
        'age',
        'position_id',
        'description',
        'is_married',
    ];

    public function profile()
    {
        return $this->hasOne(Profile::class, 'worker_id', 'id');
    }

    public function position()
    {
        return$this->belongsTo(Position::class, 'position_id', 'id');
    }
}
