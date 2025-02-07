<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function funIngresar(Request $request){


    }
    public function funRegistro(Request $request){
        //validar
        $request->validate([
            "name" => "required",
            "email" => "required|email|unique:users",
            "password" => "required|same:c_password",
        ]);


        //registrar
        $usuario = new User();
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->password);
        $usuario->save();

        //responder
        return response()->json(["mensaje" => "Usuario Registrado"]);
    }
    public function funPerfil(Request $request){


    }
    public function funSalir(Request $request){


    }
}
