<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagenes extends Model
{
    protected $table = 'imagen';
    protected $fillable = ['imagen','tipo'];
}
