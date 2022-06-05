<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bloks extends Model
{
    use HasFactory;
    protected $table = 'blok';
    protected $primaryKey = 'nama_blok';
    public $incrementing = false;
    protected $keyType = 'char';
    protected $fillable = ['nama_blok', 'jalan', 'keterangan_lokasi'];

    public function Unit()
    {
        return $this->hasMany(Units::class);
    }
}
