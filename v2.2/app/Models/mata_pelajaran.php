<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mata_pelajaran extends Model
{
    use HasFactory;

     protected $table = 'mata_pelajarans';
    protected $primaryKey = 'id';
    protected $fillable = ['mata_pelajaran'];
}
