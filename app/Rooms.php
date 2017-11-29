<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Rooms extends Model
{
    protected $table = 'Rooms';
    protected $fillable = ['room_name', 'room_shortname','room_description','ocupation_base','ocupation_max','type_room_id'];

    public static function getRooms($paginate=7)
    {
    	$rooms=DB::table('Rooms')
	            ->join('RoomsType', 'Rooms.type_room_id', '=', 'RoomsType.type_room_id')
	            ->select('Rooms.*', 'RoomsType.*')
	            ->paginate($paginate);

	    return $rooms;
    }

}
