<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Referencias;

class ReferenciasController extends Controller

// controlador consultar datos
{
    public function index()
    {                      
       $referencias = Referencias::all();
       $array=array(
        'status'=>200,
        'msj'=>'consulta exitosa'
       );
       return [
        'data'=>$referencias,
        'response'=>$array
       ];
       // controlador seleccionar datos
    }

    public function getSelect()
    {                      
        $referencias = Referencias::select('id','nombre')->get();   
        return ['data'=>$referencias];


         // controlador Guardar datos

    }
    public function store(Request $request)
    {
        $referencias = new Referencias;
 
        //nombre campo en la BD             nombre del campo en POSTMAN
        $referencias->nombre_refe = $request->nombre_referencia;
    
        $referencias->save();


        // controlador actualizar datos
                     
    }
    public function update(Request $request)
    {
       
                        
        $referencias = Referencias::find($request->id);
        //nombre campo en la BD             nombre del campo en POSTMAN
        $referencias->nombre_refe = $request->nombre_referencia;
        
        $referencias->save();

        //Controlador Eliminar Datos
    }
    public function destroy(Request $request)
    {                      
        $referencias = Referencias::find($request->id);
        $referencias->delete();
    }
}