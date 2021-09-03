<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KategoriDetail extends Model
{
    // use SoftDeletes;

    public $table = 'kategori_detail';
    
    protected $dates = ['deleted_at'];

    public $fillable = [
        'kategori_id',
        'slug',
        'sub_kategori',
    ];

    public function kategori()
    {
        return $this->belongsTo(\App\Models\Kategori::class, 'kategori_id');
    }
}
