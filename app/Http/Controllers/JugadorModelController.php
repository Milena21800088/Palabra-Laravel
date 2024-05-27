<?php

namespace App\Http\Controllers;

use App\Models\JugadorModel;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class JugadorModelController extends Controller
{
    public function index(){
        $players = JugadorModel::get();
        return $players;
    }

    public function create(){
        //
    }

    public function store(Request $request){
        
        $Player = new JugadorModel();

        $Player->Nombre = $request->Nombre;
        $Player->Correo = $request->Correo;
        $Player->Telefono = $request->Telefono;
        $Player->Resultado = $request->Resultado;
        $Player->Intentos = $request->Intentos;
        $Player->Nivel = $request->Nivel;
        $Player->Tiempo = $request->Tiempo;

        $Player->save();

        return response()->json(['result'=>$Player], Response::HTTP_CREATED);
        
        /*
        JugadorModel::create([
            'Nombre' => $request->Nombre,
            'Correo' => $request->Correo,
            'Telefono' => $request->Telefono,
            'Resultado' => $request->Resultado,
            'Tiempo' => $request->Tiempo
        ]);
        return response()->json(['message' => 'Usuario creado con éxito'], 201);
         */
    }

    public function show(JugadorModel $jugadorModel)
    {
        //
    }

    public function edit(JugadorModel $jugadorModel)
    {
        //
    }

    public function update(Request $request, JugadorModel $jugadorModel)
    {
        //
    }

    public function destroy(JugadorModel $jugadorModel)
    {
        //
    }
}
