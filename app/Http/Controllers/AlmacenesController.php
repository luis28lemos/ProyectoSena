<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Almacenes;

class AlmacenesController extends Controller

// controlador consultar datos
{
    public function index()
    {                      
       $almacenes = Almacenes::all();
       $array=array(
        'status'=>200,
        'msj'=>'consulta exitosa'
       );
       return [
        'data'=>$almacenes,
        'response'=>$array
       ];
       // controlador seleccionar datos
    }

    public function getSelect()
    {                      
        $almacenes = Almacenes::select('id','nombre')->get();   
        return ['data'=>$almacenes];


         // controlador Guardar datos

    }
    public function store(Request $request)
    {
        $almacenes = new Almacenes;
 
        //nombre campo en la BD             nombre del campo en POSTMAN
        $almacenes->nombre = $request->nombre;
        $almacenes->direccion = $request->direccion;
        $almacenes->telefono = $request->telefono;

        $almacenes->save();


        // controlador actualizar datos
                     
    }
    public function update(Request $request)
    {
       
                        
        $almacenes = Almacenes::find($request->id);
        //nombre campo en la BD             nombre del campo en POSTMAN
        $almacenes->nombre = $request->nombre;
        $almacenes->direccion = $request->direccion;
        $almacenes->telefono = $request->telefono;
    
        $almacenes->save();

        //Controlador Eliminar Datos
    }
    public function destroy(Request $request)
    {                      
        $almacenes = Almacenes::find($request->id);
        $almacenes->delete();
    }
}
