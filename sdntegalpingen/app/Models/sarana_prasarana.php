<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sarana_prasarana extends Model
{
    use HasFactory;

    protected $table = 'sarana_prasaranas';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'deskripsi', 'image'];
}
