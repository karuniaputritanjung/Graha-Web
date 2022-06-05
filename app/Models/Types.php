<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Types extends Model
{
    use HasFactory;
    protected $table = "tipe";
    protected $primaryKey = 'id_tipe';
    public $incrementing = false;
    protected $keyType = 'integer';
    protected $fillable = ['nama_tipe', 'luas_tanah', 'luas_rumah', 'jml_lantai', 'jml_kamar'];

    public function Unit()
    {
        return $this->hasMany(Units::class);
    }
}
