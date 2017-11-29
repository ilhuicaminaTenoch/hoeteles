<?php

namespace App\Http\Controllers;

use App\Regions;
use Illuminate\Http\Request;

class RegionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regiones = Regions::latest()->paginate(10); //paginado
        return [
            'pagination' => [
                'total' => $regiones->total(),
                'current_page' => $regiones->currentPage(),
                'per_page' => $regiones->perPage(),
                'last_page' => $regiones->lastPage(),
                'from' => $regiones->firstItem(),
                'to' => $regiones->lastItem()
            ],
            'regiones' => $regiones
        ];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'region_name' => 'required',
            'region_description' => 'required',
        ]);
        Regions::create($request->all());//guarda los datos declarados en el modelo

        return;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Regions $regions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $region_id)
    {
        $this->validate($request, [
            'region_name' => 'required',
            'region_description' => 'required',
        ]);

        Regions::where('region_id', '=', $region_id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Regions $regions
     * @return \Illuminate\Http\Response
     */
    public function destroy($region_id)
    {
        return Regions::where('region_id', '=', $region_id)->delete();
    }

    public function tableroRegions()
    {
        return view('regions.tablero-regions');
    }

    public function buscaRegiones(Request $request)
    {
        $txtRegion = $request->input('txtRegion');

        $buscaRegiones = Regions::where("region_name", "like", "%$txtRegion%")->paginate(10);
        return [
            'pagination' => [
                'total' => $buscaRegiones->total(),
                'current_page' => $buscaRegiones->currentPage(),
                'per_page' => $buscaRegiones->perPage(),
                'last_page' => $buscaRegiones->lastPage(),
                'from' => $buscaRegiones->firstItem(),
                'to' => $buscaRegiones->lastItem()
            ],
            'regiones' => $buscaRegiones
        ];





    }
}
