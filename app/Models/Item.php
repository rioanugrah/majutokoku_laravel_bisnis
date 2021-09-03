<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use SoftDeletes;

    public $table = 'item';
    protected $primaryKey = 'kode_barang';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'kode_barang',
        'nama_barang',
        'kategori',
        'deskripsi',
        'stock',
        'harga_barang',
        'foto',
    ];

    public function kategori_item()
    {
        return $this->belongsTo(\App\Models\Kategori::class, 'kategori');
    }
}
