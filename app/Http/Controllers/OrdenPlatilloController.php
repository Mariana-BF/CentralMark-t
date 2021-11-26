<?php

namespace App\Http\Controllers;

use App\Models\Orden;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class OrdenPlatilloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$orden=Orden::all(); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = request()->validate([
            'anotaciones' => 'required|min:6',  
        ]);
        //
        $ultimaOrden = Orden::where('idUsuario',intval($request->idUsuario) )->where('estatus',999)->first();
        $orden = Orden::find($ultimaOrden->id);
        $orden->anotaciones = $request->anotaciones;
        $orden->total = 100;
        $orden->estatus = 1;      
        $orden->save();
            
        return view('SeguirPedido',compact('orden'));
        
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        $orden = Orden::where('idUsuario', Auth::user()->id)->where('estatus', '!=' , 999)->where('estatus', '!=' , 4)->first();            
        return view('SeguirPedido',compact('orden'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function edit(Orden $orden)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orden $orden)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orden $orden)
    {
        //
    }

    public function getOrden(Orden $orden)
    {
        
        return response(json_encode($orden),200)->header('Content-type','text/plain');
    }
}