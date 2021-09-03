<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kategori extends Model
{
    use SoftDeletes;

    public $table = 'kategori';
    
    protected $dates = ['deleted_at'];

    public $fillable = [
        'slug',
        'nama_kategori',
    ];
}
