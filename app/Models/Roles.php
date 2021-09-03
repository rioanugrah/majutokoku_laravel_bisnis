<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Roles extends Model
{
    use SoftDeletes;

    public $table = 'roles';
    
    protected $primaryKey = 'id';
    
    protected $dates = ['deleted_at'];

    public $fillable = [
        'id',
        'role',
    ];
}
