<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = "dosen";

    protected $fillable = ['id','nama_dosen','jabatan','mata_kuliah','jenis_kelamin','no_hp','email'];
}

