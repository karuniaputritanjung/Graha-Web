<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Facades\DB;

class Units extends Model
{
    use HasFactory;
    protected $table = "rumah";
    protected $primaryKey = 'nomor_rumah';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['nomor_rumah', 'blok', 'tipe', 'harga', 'gambar', 'status'];

    public function getDataByJoin($id)
    {
        return DB::table('rumah')
            ->join('blok', 'rumah.blok', '=', 'blok.nama_blok')
            ->join('tipe', 'rumah.tipe', '=', 'tipe.id_tipe')
            ->select('rumah.*', 'blok.*', 'tipe.*')
            ->where('nomor_rumah', $id)
            ->get();
    }

    public function getDataJoin()
    {
        return DB::table('rumah')
            ->join('blok', 'rumah.blok', '=', 'blok.nama_blok')
            ->join('tipe', 'rumah.tipe', '=', 'tipe.id_tipe')
            ->select('rumah.*', 'blok.*', 'tipe.*')
            ->where('status', 'Tersedia')
            ->get();
    }
}
