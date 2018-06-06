<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Navigation extends Model
{
    public $timestamps = false;
     protected $table = 'navigations';
    protected $fillable = ['name','url','admin','id'];

}
