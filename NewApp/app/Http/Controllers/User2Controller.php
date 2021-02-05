<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\User2Resouce;
use App\Models\User2;
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
        $user = User2::paginate(10);
        return User2Resouce::collection($user);

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
        $user = new User2();
        $user->nombreUsuario = $request->nombreUsuario;
        $user->nombreCompleto = $request->nombreCompleto;
        $user->email = $request->email;
        $user->telefono = $request->telefono;
        $user->edad= $request->edad;
        $user->FechaNaci = $request->FechaNaci;

        if($user->save()){
            return new User2Resouce($user);
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
        $user = User2::findOrFail($id);
        return new User2Resouce($user);
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
        $user = User2::findOrFail($id);
        $user->nombreUsuario = $request->nombreUsuario;
        $user->nombreCompleto = $request->nombreCompleto;
        $user->email = $request->email;
        $user->telefono = $request->telefono;
        $user->edad= $request->edad;
        $user->FechaNaci = $request->FechaNaci;
        if($user->save()){
            return new User2Resouce($user);
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
        $user = User2::findOrFail($id);
        if($user->delete()){
            return new User2Resouce($user);
        }
    }
}
