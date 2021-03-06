<?php

namespace nameproject\Http\Controllers;

use Illuminate\Http\Request;
use nameproject\Contacto;
use nameproject\Telefonos;
use nameproject\DetalleTelefono;
use nameproject\Http\Requests;
use nameproject\Http\Controllers\Controller;

class Controlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $contactos['contactos'] = Contacto::all();
      return view('contacto.show',$contactos);
    }

    public function showApi()
    {
      # codigo para la api de usuarios que me mostrarn en la aplicacion la lista de contactos
      $contactos['contactos'] = Contacto::all();
      echo json_encode($contactos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('contacto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $contacto = new Contacto();
        $contacto->usuario = $request->get('usuario');
        $contacto->nombre = $request->get('usuario');
        $contacto->apellido = $request->get('apellido');
        // $contacto->telefono = $request->get('telefono');
        $contacto->email = $request->get('email');
        if ($contacto->save()) {
          $idcontacto = $contacto->id;
          $telefono = new Telefonos();
          $telefono->Telefono = $request->get('telefono');
          if ($telefono->save()) {
            # code...
            $idtelefono=$telefono->id;
            $detelefono = new DetalleTelefono();
            $detelefono->idTelefono = $idtelefono;
            $detelefono->idContacto = $idcontacto;
            if ($detelefono->save()) {
              # code...
              return redirect()->route('home_path');
            }
          }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $contacto = Contacto::findOrFail($id);
        $data['contacto'] = $contacto;
        return view('contacto.edit',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $contacto = Contacto::findOrFail($id);
        $contacto->usuario = $request->get('usuario');
        $contacto->nombre = $request->get('usuario');
        $contacto->apellido = $request->get('apellido');
        $contacto->telefono = $request->get('telefono');
        $contacto->email = $request->get('email');
        if ($contacto->save()) {
          return redirect()->route('home_path');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $contacto = Contacto::find($id);
        $contacto->delete();
        return redirect()->route('home_path');
    }
}
