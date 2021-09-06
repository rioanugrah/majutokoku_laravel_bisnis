<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    use SoftDeletes;

    public $table = 'profile';
    
    // protected $primaryKey = 'id';
    
    protected $dates = ['deleted_at'];

    public $fillable = [
        'user_id',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'posisi',
        'bio',
        'pendidikan',
        'sertifikasi',
        'skill',
        'bahasa',
    ];
}
