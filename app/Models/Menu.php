<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use SoftDeletes;

    public $table = 'menu';
    
    // protected $primaryKey = 'id';
    
    protected $dates = ['deleted_at'];

    public $fillable = [
        'id',
        'menu',
        'slug',
        'role_id',
        // 'user_id',
        'c',
        'r',
        'u',
        'd',
    ];

    public function roles()
    {
        return $this->belongsTo(\App\Models\Roles::class, 'role_id');
    }
}
