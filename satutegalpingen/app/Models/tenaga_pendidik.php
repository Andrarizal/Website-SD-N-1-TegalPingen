<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tenaga_pendidik extends Model
{
    use HasFactory;

    protected $table = 'tenaga_pendidiks';
    protected $primaryKey = 'id';
    protected $fillable = ['nama_GuruKaryawan', 'image', 'carosel', 'role'];
}
