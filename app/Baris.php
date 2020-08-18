<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Baris extends Model
{
    protected $table = 'baris';
    protected $primaryKey = 'id';
    protected $fillable = ['id','baris'];
}
