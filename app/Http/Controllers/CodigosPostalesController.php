<?php

namespace App\Http\Controllers;

use App\CodigosPostales;
use Illuminate\Http\Request;

class CodigosPostalesController extends Controller
{
    public function index(Request $request)
    {

        $cp = CodigosPostales::latest()->paginate(10); //paginado
        return [
            'pagination' => [
                'total' => $cp->total(),
                'current_page' => $cp->currentPage(),
                'per_page' => $cp->perPage(),
                'last_page' => $cp->lastPage(),
                'from' => $cp->firstItem(),
                'to' => $cp->last()
            ],
            'codigosPostales' => $cp
        ];
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function tableroCodigoPostal()
    {
        return view('codigosPostales.tablero-codigo-postal');
    }

    /**
     * @param $codigoPostal
     * @return mixed
     */
    public function buscaCodigoPostal(Request $request)
    {
        $txtCodigoPostal = $request->input('codigoPostal');

        $codigosPostales = CodigosPostales::where('codigo_postal', '=', $txtCodigoPostal)->get();


        return $codigosPostales;


    }


    public function store(Request $request)
    {
        //guardar
        $this->validate($request, [
            'id_estado' => 'required',
            'estado' => 'required',
            'id_municipio' => 'required',
            'municipio' => 'required',
            'ciudad' => 'required',
            'zona' => 'required',
            'codigo_postal' => 'required',
            'asentamiento' => 'required',
            'tipo' => 'required'
        ]);
        CodigosPostales::create($request->all());//guarda los datos declarados en el modelo

        return;
    }

    /**
     * @param $idCodigoPostal
     * @return mixed
     */
    public function destroy($idCodigoPostal)
    {
        return CodigosPostales::where('id_codigo_postal', '=', $idCodigoPostal)->delete();

    }

    public function update(Request $request, $idCodigoPostal)
    {
        $this->validate($request, [
            'id_estado' => 'required',
            'estado' => 'required',
            'id_municipio' => 'required',
            'municipio' => 'required',
            'ciudad' => 'required',
            'zona' => 'required',
            'codigo_postal' => 'required',
            'asentamiento' => 'required',
            'tipo' => 'required'
        ]);
        CodigosPostales::where('id_codigo_postal', '=', $idCodigoPostal)->update($request->all());

        return;
    }


}
