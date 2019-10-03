<?php

namespace App\Http\Controllers;

use App\Registro;
use Illuminate\Http\Request;

class RegistroController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*GET

    OBTENER TODOS LOS REGISTROS*/
    public function index() {
        $registros = Registro::all();
        return json_encode($registros);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /*POST*/
    public function store(Request $request) {
        $registro = new Registro;
        $registro->nombre = $request->input('nombre');
        $registro->descripcion = $request->input('descripcion');
        $registro->save();
        return json_encode($registro);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*GET*/
    public function show($id) {
        $registro = Registro::findOrFail($id);
        return json_encode($registro);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*PUT*/
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /*DELETE*/
    public function destroy($id) {
        //
    }
}
