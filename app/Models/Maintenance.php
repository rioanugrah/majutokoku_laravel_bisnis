<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Maintenance extends Model
{
    use SoftDeletes;

    public $table = 'maintenance';
    
    protected $dates = ['deleted_at'];

    public $fillable = [
        'title',
        'url',
        'deskripsi',
        'status',
        'mulai',
        'sampai',
    ];
}
