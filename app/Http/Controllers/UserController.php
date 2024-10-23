<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function index()
    {
        //OBTENER TODOS LOS USUARIOS DE LA DB
        try{
            $users = User::paginate(10);
            return view("users.index", compact("users"));  //COMPACT TOMA LA LISTA TRAIDA DE ELOQUENT Y LA COMPACTA PARA PASARLA A LA VISTA
        }catch(\Exception $e){
            return response()->json(['error' => 'Error al obtener los usuarios'], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * BUSCAR POR ID
     */
    public function show(string $id)
    {
        try{
            $user = User::find($id);
            return view("users.show",compact("user"));
        }catch(\Exception $e){

        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * RECORDAR AÑADIR EL ATRIBUTO A LA ENTIDAD PARA PODER HACER EL SOFT DELETE    TO-DO
     */
    public function destroy(string $id)
    {
        try{
            $user = User::find($id); //buscamos por id
            $user->delete(); //borramos
            return back()->with("succes", "se ha eliminado corretamente"); //devolvemos a la vista anterior con el back y lanzamos mensaje
        }catch(\Exception $e){
            return response()->json(['error' => 'Error al eliminar el usuario'], 500);
        }
    }
}
