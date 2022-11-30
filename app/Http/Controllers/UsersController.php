<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class UsersController extends Controller

// controlador consultar datos
{
    public function index()
    {                      
       $users = Users::all();
       $array=array(
        'status'=>200,
        'msj'=>'consulta exitosa'
       );
       return [
        'data'=>$users,
        'response'=>$array
       ];
       // controlador seleccionar datos
    }

    public function getSelect()
    {                      
        $users = Users::select('id','nombre')->get();   
        return ['data'=>$users];


         // controlador Guardar datos

    }
    public function store(Request $request)
    {
        $users = new Users;
 
        //nombre campo en la BD             nombre del campo en POSTMAN
        $users->name = $request->nombre;
        $users->email = $request->email;
        $users->password = $request->contraseña;
        $users->remember_token = $request->token;

        $users->save();


        // controlador actualizar datos
                     
    }
    public function update(Request $request)
    {
       
                        
        $users = Users::find($request->id);
        //nombre campo en la BD             nombre del campo en POSTMAN
        $users->name = $request->nombre;
        $users->email = $request->email;
        $users->password = $request->contraseña;
        $users->remember_token = $request->token;
    
        $users->save();

        //Controlador Eliminar Datos
    }
    public function destroy(Request $request)
    {                      
        $users = Users::find($request->id);
        $users->delete();
    }
}