<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prestasi extends Model
{
    use HasFactory;

    protected $table = 'prestasis';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'deskripsi', 'image'];
}
