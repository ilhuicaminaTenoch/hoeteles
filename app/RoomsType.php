<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomsType extends Model
{
	protected $table = 'RoomsType';
    protected $fillable = ['type_name', 'type_description'];
}
