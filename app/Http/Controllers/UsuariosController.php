<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuarios;

class UsuariosController extends Controller

{
    //
    public function store(Request $request)
     {
        // Validate the request...
 
        $usuarios = new usuarios;
 
        $usuarios->cc_usuario = $request->cedula;
        $usuarios->estado_usu = $request->estado;
        $usuarios->contrasena = $request->clave;
 
        $usuarios->save();
    }
}
