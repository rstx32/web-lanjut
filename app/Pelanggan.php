<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = "pelanggan";
    protected $fillable = ['username','password','email'];
    public $timestamps = false;
    protected $primaryKey = "kode_plgn";
}
