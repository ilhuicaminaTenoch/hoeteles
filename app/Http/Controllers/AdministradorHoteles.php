<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministradorHoteles extends Controller
{
    public function LoadFormHotel()
    {
    	return view('newhotel');
    }

    public function CreateHotel()
    {
    	
    }
}
