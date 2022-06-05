<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = "transaksi";
    protected $primaryKey = 'id_transaksi';
    public $incrementing = true;
    protected $keyType = 'integer';
    protected $fillable = [
        'id_transaksi', 'nama', 'email', 'alamat', 'provinsi', 'kota', 'kecamatan', 'desa',
        'kodepos', 'nohp', 'metode_pembayaran', 'biaya', 'nomor_rumah', 'notaris', 'tgl_pembelian'
    ];
}
