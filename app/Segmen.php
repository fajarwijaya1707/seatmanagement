<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Segmen extends Model
{
    protected $table = 'segmen';
    protected $primaryKey = 'id';
    protected $fillable = ['id','segmen'];
}
