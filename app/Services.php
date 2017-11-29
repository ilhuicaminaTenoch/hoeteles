<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $table = 'Services';
    protected $fillable = ['service_name', 'service_description'];
}
