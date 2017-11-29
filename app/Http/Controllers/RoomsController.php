<?php

namespace App\Http\Controllers;

use App\Rooms;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
	public function index()
    {
        $rooms = Rooms::getRooms(); //paginado

        return [
            'pagination' => [
                'total' => $rooms->total(),
                'current_page' => $rooms->currentPage(),
                'per_page' => $rooms->perPage(),
                'last_page' => $rooms->lastPage(),
                'from' => $rooms->firstItem(),
                'to' => $rooms->last()
            ],
            'rooms' => $rooms
        ];
    }

    public function Rooms()
    {
    	return view('rooms.rooms');
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
}
