<?php

namespace App\Http\Controllers;

use App\Models\Orden;
use Illuminate\Http\Request;
use App\Models\Platillo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class OrdenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $id_platillo=request();
        $ultimaOrden = Orden::where('idUsuario',intval($id_platillo["idUsuario"]) )->where('estatus',999)->first();

        if(!empty($ultimaOrden)){
            
        
            $platillosPedidos=DB::table('orden_has_platillo')->get();

            $platillosPedidos = DB::table('orden_has_platillo')
            ->join('platillos', 'orden_has_platillo.idPlatillo', '=', 'platillos.id')
            ->where('orden_id',$ultimaOrden->id)
            ->get();
            
            return view('FormularioEnvio',compact('ultimaOrden','platillosPedidos'));
        }else{
            return redirect()->action('HomeController@getUser');
        }
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
    public function show(Orden $orden)
    {
        //
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

    public function FinalizarOrden(){
        $orden = Orden::where('idUsuario', Auth::user()->id)->where('estatus', '!=' , 999)->where('estatus', '!=' , 4)->first();            
        $orden->estatus = 4;
        $orden->save();
        return redirect()->action('HomeController@getUser');   
    }

    public function InsertarenOrden(Request $request) //, int $cantidad)
    {        
        $id_platillo=request();
        $ultimaOrden = Orden::where('idUsuario',intval($id_platillo["idUsuario"]) )->where('estatus',999)->first();
        if(empty($ultimaOrden)){
            echo "No hay pedido pendiente";
            $orden = new Orden;
            $orden->idUsuario = $id_platillo["idUsuario"];
            $orden->estatus = 999;
            $orden->save();
        }
        echo "Pedido pendiente";
        $ultimaOrden = Orden::where('idUsuario',intval($id_platillo["idUsuario"]) )->where('estatus',999)->first();
        $platillos = Platillo::all();
        $platillos = Platillo::where('id',intval($id_platillo["id"] ) )->first();
    
        DB::table('orden_has_platillo')->insert([
        'orden_id'=>$ultimaOrden->id,
        'idPlatillo'=>$platillos->id,
        'cantidad'=>$id_platillo["cantidad"],
        ]);             
    
        
     /*
        $platillos = Platillo::all();
        $platillos = Platillo::where('id',intval($id_platillo["id"] ) )->first();
        
        
        DB::table('orden_has_platillo')->insert([
            'orden_id'=>1,
            'idPlatillo'=>$platillos->id,
            'cantidad'=>$id_platillo["cantidad"],
        ]);
    */
       return redirect()->action('HomeController@getUser');
    }


    public function ordenes()
    {
        
        $platillosPedidos = DB::table('orden_has_platillo')
        ->join('platillos', 'orden_has_platillo.idPlatillo', '=', 'platillos.id')
        ->get();

        $orden = DB::table('ordens')->get();

        
        return view('administraorden',compact('platillosPedidos','orden'));
    }

    public function cambiarordennueva($id)
    {
        
        DB::update('update ordens set estatus = 2 where id = ?', [$id]);

        return redirect()->action('OrdenController@ordenes');
    }

    public function deleteorden($id)
    {
        DB::delete('delete from orden_has_platillo where orden_id = ?',[$id]);
        DB::delete('delete from ordens where id = ?',[$id]);

        return redirect()->action('OrdenController@ordenes');
    }

    public function cambiarordenproceso($id)
    {
        DB::update('update ordens set estatus = 3 where id = ?', [$id]);
        return redirect()->action('OrdenController@ordenes');
    }
}