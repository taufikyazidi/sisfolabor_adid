<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alat extends Model
{
    protected $table = "alat";

    protected $fillable = ['kode_alat','id_labor','nama_alat','jumlah'];
}
