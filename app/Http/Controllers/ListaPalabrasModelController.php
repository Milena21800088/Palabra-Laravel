<?php

namespace App\Http\Controllers;

use App\Models\Lista_Palabras_Model;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ListaPalabrasModelController extends Controller
{
    
    public function index(){
        $words = Lista_Palabras_Model::get();
        return $words;
    }

    public function create()
    {
        //
    }

    public function store(Request $request){
        $Palabras = new Lista_Palabras_Model();

        $Palabras->palabra = $request->palabra;

        $Palabras->save();

        return response()->json(['result'=>$Palabras], Response::HTTP_CREATED);
        /*
        Lista_Palabras_Model::create([
            'palabra' => $request->palabra
            
        ]);
        return response()->json(['message' => 'Palabra creado con éxito'], 201);
        */
    }

    public function show(Lista_Palabras_Model $lista_Palabras_Model)
    {
        //
    }

    public function edit(Lista_Palabras_Model $lista_Palabras_Model)
    {
        //
    }

    public function update(Request $request, Lista_Palabras_Model $lista_Palabras_Model)
    {
        //
    }

    public function destroy(Lista_Palabras_Model $lista_Palabras_Model)
    {
        //
    }
}
