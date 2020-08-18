<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maksimal extends Model
{
    protected $table = 'maksimal';
    protected $primaryKey = 'id';
    protected $fillable = ['id','jumlah'];
}
