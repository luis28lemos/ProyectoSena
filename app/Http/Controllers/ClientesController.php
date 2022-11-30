<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;

class ClientesController extends Controller

// controlador consultar datos
{
    public function index()
    {                      
       $clientes = Clientes::all();
       $array=array(
        'status'=>200,
        'msj'=>'consulta exitosa'
       );
       return [
        'data'=>$clientes,
        'response'=>$array
       ];
       // controlador seleccionar datos
    }

    public function getSelect()
    {                      
        $clientes = Clientes::select('id','nombre')->get();   
        return ['data'=>$clientes];


         // controlador Guardar datos

    }
    public function store(Request $request)
    {
        $clientes = new Clientes;
 
        //nombre campo en la BD             nombre del campo en POSTMAN
        $clientes->nombre_cliente = $request->nombre;
        $clientes->cc_cliente = $request->cedula;
        $clientes->telefono = $request->telefono;
        $clientes->direccion = $request->direccion;
        $clientes->email = $request->email;

        $clientes->save();


        // controlador actualizar datos
                     
    }
    public function update(Request $request)
    {
       
                        
        $clientes = Clientes::find($request->id);
        //nombre campo en la BD             nombre del campo en POSTMAN
        $clientes->nombre_cliente = $request->nombre;
        $clientes->cc_cliente = $request->cedula;
        $clientes->telefono = $request->telefono;
        $clientes->direccion = $request->direccion;
        $clientes->email = $request->email;
    
        $clientes->save();

        //Controlador Eliminar Datos
    }
    public function destroy(Request $request)
    {                      
        $clientes = Clientes::find($request->id);
        $clientes->delete();
    }
}
