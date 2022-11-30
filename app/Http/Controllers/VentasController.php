<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ventas;

class VentasController extends Controller

// controlador consultar datos
{
    public function index()
    {                      
       $ventas = Ventas::all();
       $array=array(
        'status'=>200,
        'msj'=>'consulta exitosa'
       );
       return [
        'data'=>$ventas,
        'response'=>$array
       ];
       // controlador seleccionar datos
    }

    public function getSelect()
    {                      
        $ventas = Ventas::select('id','nombre')->get();   
        return ['data'=>$ventas];


         // controlador Guardar datos

    }
    public function store(Request $request)
    {
        $ventas = new Ventas;
 
        //nombre campo en la BD             nombre del campo en POSTMAN
        $ventas->clie_venta = $request->cliente;
        $ventas->estado_venta = $request->estado;
        $ventas->numero_venta = $request->numero;
        $ventas->total = $request->total;
        $ventas->usuario = $request->usuario;
        $ventas->venta_id = $request->venta;
        $ventas->fecha = $request->fecha;

        $ventas->save();


        // controlador actualizar datos
                     
    }
    public function update(Request $request)
    {
       
                        
        $ventas = Ventas::find($request->id);
        //nombre campo en la BD             nombre del campo en POSTMAN
        $ventas->clie_venta = $request->cliente;
        $ventas->estado_venta = $request->estado;
        $ventas->numero_venta = $request->numero;
        $ventas->total = $request->total;
        $ventas->usuario = $request->usuario;
        $ventas->venta_id = $request->venta;
        $ventas->fecha = $request->fecha;
    
        $ventas->save();

        //Controlador Eliminar Datos
    }
    public function destroy(Request $request)
    {                      
        $ventas = Ventas::find($request->id);
        $ventas->delete();
    }
}