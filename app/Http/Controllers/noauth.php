<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class noauth extends Controller
{
    //


    public function validacelular(Request $datos){
        // dd($datos);
        $usuario = User::getmenubycelular($datos->celular);
        // $usuario = DB::table('users')->where('email', $datos->celular)->first();


        return $usuario;
    }
}
