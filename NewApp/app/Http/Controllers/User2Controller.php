<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\User2Resouce;
use App\Models\User2;

use App\Models\Rol;

use DB;

class User2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$user = User2::paginate(10);
        return User2Resouce::collection($user);*/

        return response()->json(User2::all(), 200);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        /* Enviar Datos por campos desde ela funcion  */
       /* $user = new User2();
        $user->nombreUsuario = $request->nombreUsuario;
        $user->nombreCompleto = $request->nombreCompleto;
        $user->email = $request->email;
        $user->telefono = $request->telefono;
        $user->edad= $request->edad;
        $user->FechaNaci = $request->FechaNaci;

        if($user->save()){
            return new User2Resouce($user);
        }*/

        /* Otra forma de mandar datos method : POST*/
        $user = User2::create($request->all());
        return response($user, 201);



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       /* $user = User2::findOrFail($id);
        return new User2Resouce($user);*/
        //return response()->json(User2::findOrFail($id), 200);
        $user = User2::find($id);
        if(is_null($user)){
            return response()->json(['message' =>'User Not Found'],400);
        }
        return response()->json($user::find($id),200);
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
        /* Enviar Datos  */
      /*  $user = User2::findOrFail($id);
        $user->nombreUsuario = $request->nombreUsuario;
        $user->nombreCompleto = $request->nombreCompleto;
        $user->email = $request->email;
        $user->telefono = $request->telefono;
        $user->edad= $request->edad;
        $user->FechaNaci = $request->FechaNaci;
        if($user->save()){
            return new User2Resouce($user);
        }*/

        /* Actualizar por otro metodo  */
        $user = User2::find($id);
        if(is_null($user)){
            return response()->json(['message'=> 'User Not Found'], 404);
        }
        $user->update($request->all());
            return response($user, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      /*  $user = User2::findOrFail($id);
        if($user->delete()){
            return new User2Resouce($user);
        }*/

        $user = User2::find($id);
        if(is_null($user)) {
            return response()->json(['message' => 'User Not Found'], 404);
        }
        $user->delete();
        return response()->json(null, 200);
    }
}
