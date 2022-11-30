<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detalleventas;

class DetalleventasController extends Controller

// controlador consultar datos
{
    public function index()
    {                      
       $detalleventas = Detalleventas::all();
       $array=array(
        'status'=>200,
        'msj'=>'consulta exitosa'
       );
       return [
        'data'=>$detalleventas,
        'response'=>$array
       ];
       // controlador seleccionar datos
    }

    public function getSelect()
    {                      
        $detalleventas = Detalleventas::select('id','nombre')->get();   
        return ['data'=>$detalleventas];


         // controlador Guardar datos

    }
    public function store(Request $request)
    {
        $detalleventas = new Detalleventas;
 
        //nombre campo en la BD             nombre del campo en POSTMAN
        $detalleventas->cant_producto = $request->cantidad;
        $detalleventas->precios = $request->precios;
        $detalleventas->id_venta = $request->id;
        $detalleventas->venta_id = $request->venta;
        $detalleventas->productos_id = $request->productos;

        $detalleventas->save();


        // controlador actualizar datos
                     
    }
    public function update(Request $request)
    {
       
                        
        $detalleventas = Detalleventas::find($request->id);
        //nombre campo en la BD             nombre del campo en POSTMAN
        $detalleventas->cant_producto = $request->cantidad;
        $detalleventas->precios = $request->precios;
        $detalleventas->id_venta = $request->id;
        $detalleventas->venta_id = $request->venta;
        $detalleventas->productos_id = $request->productos;
    
        $detalleventas->save();

        //Controlador Eliminar Datos
    }
    public function destroy(Request $request)
    {                      
        $detalleventas = Detalleventas::find($request->id);
        $detalleventas->delete();
    }
}
