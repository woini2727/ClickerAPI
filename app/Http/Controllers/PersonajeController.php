<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personaje;
use App\PersonajeModel;

class PersonajeController extends Controller
{
     public function show(){

       //return view('principal.index');
        $personajeModel = PersonajeModel::all();
    	return view('personajes.personajes')->with(compact('personajeModel'));
    }

    public  function store(Request $request)
    {
 
        $user=\Auth::user()->userPersonaje()->first();
        if ($user == null){


        $PersonajeBase = PersonajeModel::find($request->Especie);

        $personaje = new Personaje;
        //dd($request);
        $personaje->create([

            'name'=>$PersonajeBase->name,
            'Especie'=>$request->Especie,
            'User'=> \Auth::user()->id,
            'img'=>$PersonajeBase->img,
            'Velocidad'=>$PersonajeBase->Velocidad,
            'Fuerza'=>$PersonajeBase->Fuerza,
            'Inteligencia'=>$PersonajeBase->Inteligencia
            ]);


        /*

        $dataValidad = $request->validate([

                'nombre'=>'required|unique:posts|max:255',
                'Especie'=>'required|integer'
            ]);
        */
                $personajeModel = PersonajeModel::all();

        $succes='Exito al cargar Personaje Nuevo';
        return view('personajes.personajes')->with(compact('succes'))
                                            ->with(compact('personajeModel'));
        }else{
            $personajeModel = PersonajeModel::all();
            $succes='Ya cuenta con un personaje';
        return view('personajes.personajes')->with(compact('succes'))
                                            ->with(compact('personajeModel'));
        }

    }

    public static function create()
    {
    	
    }
}
