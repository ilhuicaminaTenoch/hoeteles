<?php

namespace App\Http\Controllers;

use App\RoomsType;
use Illuminate\Http\Request;

class RoomsTypeController extends Controller
{
	public function index()
    {
        $roomstype = RoomsType::latest()->paginate(7); //paginado

        return [
            'pagination' => [
                'total' => $roomstype->total(),
                'current_page' => $roomstype->currentPage(),
                'per_page' => $roomstype->perPage(),
                'last_page' => $roomstype->lastPage(),
                'from' => $roomstype->firstItem(),
                'to' => $roomstype->last()
            ],
            'roomstype' => $roomstype
        ];
    }

    public function tableroRoomsType()
    {
    	return view('roomsType.tablero-rooms-type');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'type_name' => 'required',
            'type_description' => 'required',
        ]);
        RoomsType::create($request->all());//guarda los datos declarados en el modelo

        return;
    }

    public function update(Request $request, $type_room_id)
    {
        $this->validate($request, [
            'type_name' => 'required',
            'type_description' => 'required',
        ]);

        RoomsType::where('type_room_id', '=', $type_room_id)->update($request->all());
    }

    public function destroy($type_room_id)
    {
        return RoomsType::where('type_room_id', '=', $type_room_id)->delete();
    }
}
