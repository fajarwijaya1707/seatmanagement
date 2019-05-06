<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kursi extends Model
{
    protected $table = 'kursi';
    protected $primaryKey = 'id_kursi';
    protected $fillable = ['id_kursi','segmen','baris','jumlah'];
}
