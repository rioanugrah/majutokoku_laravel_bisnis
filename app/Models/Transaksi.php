<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaksi extends Model
{
    use SoftDeletes;

    public $table = 'transaksi';
    protected $primaryKey = 'no_invoice';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'no_invoice',
        'user_id',
        'metode_pembayaran',
        'bukti_pembayaran',
        'kode_unik',
        'status_pembayaran',
        'total',
    ];
}
