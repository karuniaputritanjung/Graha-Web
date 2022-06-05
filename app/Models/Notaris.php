<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notaris extends Model
{
    use HasFactory;
    protected $table = "notaris";
    protected $primaryKey = 'id_notaris';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['id_notaris', 'nama_notaris'];
}
