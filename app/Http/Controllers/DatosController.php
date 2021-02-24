<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tutor;

class DatosController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $request->validate([
            'empresa_nombre' => 'required',
            'tutor_nombre'=> 'required',
            'tutor_apellido1'=> 'required',
            'tutor_apellido2'=> 'required',
            'estado'=> 'required',
            'email'=> 'required',
            'phone'=> 'required',
            'pais'=> 'required',
            'provincia'=> 'required',
            'municipio'=> 'required'
        ]);

        $DatosController = new Tutor([
            'empresa_nombre' => $request->get('empresa_nombre'),
            'tutor_nombre' => $request->get('tutor_nombre'),
            'tutor_apellido1' => $request->get('tutor_apellido1'),
            'tutor_apellido2' => $request->get('tutor_apellido2'),
            'estado' => $request->get('stado'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'pais' => $request->get('pais'),
            'provincia' => $request->get('provincia'),
            'municipio' => $request->get('municipio'),
        ]);
        $DatosController->save();
        return redirect('/tutores')->with('success', 'Tutor saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
