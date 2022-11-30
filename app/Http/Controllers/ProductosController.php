<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;

class ProductosController extends Controller

// controlador consultar datos
{
    public function index()
    {                      
       $productos = Productos::all();
       $array=array(
        'status'=>200,
        'msj'=>'consulta exitosa'
       );
       return [
        'data'=>$productos,
        'response'=>$array
       ];
       // controlador seleccionar datos
    }

    public function getSelect()
    {                      
        $productos = Productos::select('id','nombre')->get();   
        return ['data'=>$productos];


         // controlador Guardar datos

    }
    public function store(Request $request)
    {
        $productos = new Productos;
 
        //nombre campo en la BD             nombre del campo en POSTMAN
        $productos->codigo_pro = $request->codigo;
        $productos->nombre_pro = $request->nombre;
        $productos->cant_pro = $request->cantidad;
        $productos->precio = $request->precio;
        $productos->fecha = $request->fecha;
        $productos->id_referencia = $request->referencia;

        $productos->save();


        // controlador actualizar datos
                     
    }
    public function update(Request $request)
    {
       
                        
        $productos = Productos::find($request->id);
        //nombre campo en la BD             nombre del campo en POSTMAN
        $productos->codigo_pro = $request->codigo;
        $productos->nombre_pro = $request->nombre;
        $productos->cant_pro = $request->cantidad;
        $productos->precio = $request->precio;
        $productos->fecha = $request->fecha;
        $productos->id_referencia = $request->referencia;
    
        $productos->save();

        //Controlador Eliminar Datos
    }
    public function destroy(Request $request)
    {                      
        $productos = Productos::find($request->id);
        $productos->delete();
    }
}