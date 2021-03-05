<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\RolResouce;
use App\Models\Rol;
use DB;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /* $rol = Rol::paginate(10);
        return RolResouce::collection($rol);*/
        return response()->json(Rol::all(), 200);

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

        $rol = Rol::create($request->all());
        return response($rol, 201);
        //$rol = new Rol();
        //$rol->descripcion = $request->descripcion;

        //if($rol->save()){
          //  return new RolResouce($rol);
        //}

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       /* $rol = Rol::findOrFail($id);
        return new RolResouce($rol); */
        $rol = Rol::find($id);
        if(is_null($rol)){
            return response()->json(['message'=>'User Not Foud'],400);
        }
        return response()->json(Rol::findOrFail($id), 200);
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
        $rol = Rol::find($id);
        if(is_null($rol)){
            return responde()->json(['message'=>'User Not Found'], 404);
        }

        $rol->update($request->all());
            return response ($rol,200);
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $rol = Rol::find($id);
       if(is_null($rol)){
           return response()->json(['message' => 'User Not Found'],404);
       }
       $rol->delete();
       return response()->json(null, 200);
    }
}
