<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penggunaan extends Model
{
    protected $table = "penggunaan";

    protected $fillable = ['id_labor','jumlah_mahasiswa','id_dosen','tgl_penggunaan'];
}
