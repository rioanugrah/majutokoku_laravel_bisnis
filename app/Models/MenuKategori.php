<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MenuKategori extends Model
{
    use SoftDeletes;

    public $table = 'menu_kategori';
    
    // protected $primaryKey = 'id';
    
    protected $dates = ['deleted_at'];

    public $fillable = [
        'menu_kategori',
        'menu_id',
    ];

    public function menus()
    {
        return $this->belongsTo(\App\Models\Menu::class, 'menu_id');
    }
}
