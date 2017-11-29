<?php

namespace App\Http\Controllers;

use App\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicios = Services::latest()->paginate(10); //paginado
        return [
            'pagination' => [
                'total' => $servicios->total(),
                'current_page' => $servicios->currentPage(),
                'per_page' => $servicios->perPage(),
                'last_page' => $servicios->lastPage(),
                'from' => $servicios->firstItem(),
                'to' => $servicios->lastItem()
            ],
            'servicios' => $servicios
        ];
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'service_name' => 'required',
            'service_description' => 'required',
        ]);
        Services::create($request->all());//guarda los datos declarados

        return;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $service_id)
    {
        $this->validate($request, [
            'service_name' => 'required',
            'service_description' => 'required',
        ]);

        Services::where('service_id', '=', $service_id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy($service_id)
    {
        return Services::where('service_id', '=', $service_id)->delete();
    }

    public function tableroServicio()
    {
        return view('servicios.tablero-servicio');
    }

    public function buscaServicio(Request $request)
    {
        $txtServicio = $request->input('txtServicio');

        $buscaServicio = Services::where("service_name", "like", "%$txtServicio%")->paginate(10);
        return [
            'pagination' => [
                'total' => $buscaServicio->total(),
                'current_page' => $buscaServicio->currentPage(),
                'per_page' => $buscaServicio->perPage(),
                'last_page' => $buscaServicio->lastPage(),
                'from' => $buscaServicio->firstItem(),
                'to' => $buscaServicio->lastItem()
            ],
            'servicios' => $buscaServicio
        ];





    }
}
