<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marcas;

class MarcasController extends Controller

// controlador consultar datos
{
    public function index()
    {                      
       $marcas = marcas::all();
       $array=array(
        'status'=>200,
        'msj'=>'consulta exitosa'
       );
       return [
        'data'=>$cargos,
        'response'=>$array
       ];
       // controlador seleccionar datos
    }

    public function getSelect()
    {                      
        $marcas = Marcas::select('id','nombre')->get();   
        return ['data'=>$marcas];


         // controlador Guardar datos

    }
    public function store(Request $request)
    {
        $marcas = new Marcas;
 
        $marcas->nombre = $request->nombre;
 
        $marcas->save();


        // controlador actualizar datos
                     
    }
    public function update(Request $request)
    {
       
                        
        $marcas = Marcas::find($request->id);
 
        $marcas->nombre = $request->nombre;
    
        $marcas->save();

        //Controlador Eliminar Datos
    }
    public function destroy(Request $request)
    {                      
        $marcas = Marcas::find($request->id);
        $marcas->delete();
    }
}