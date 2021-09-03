<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Portal extends Model
{
    use SoftDeletes;

    public $table = 'portal';
    
    // protected $primaryKey = 'id';
    
    protected $dates = ['deleted_at'];

    public $fillable = [
        'nama_portal',
        'slug',
        'link_url',
        'icon',
    ];
}
