<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regions extends Model
{
    protected $table = 'Regions';
    protected $fillable = ['region_name', 'region_description'];
}
