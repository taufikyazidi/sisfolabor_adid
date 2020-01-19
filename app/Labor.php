<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Labor extends Model
{
    protected $table = "labor";

    protected $fillable = ['kode_labor','nama_labor','deskripsi'];
}
