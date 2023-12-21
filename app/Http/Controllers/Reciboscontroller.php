<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contribuyente;
use App\Models\Maestrofinca;
use App\Models\Masterobra as ModelsMasterobra;
use App\Models\Menu;
use App\Models\Recibos;
use App\Models\ubicacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Reciboscontroller extends Controller
{
    public function index(){
        $menu = MenuController::indexall();

        $listado = Maestrofinca::getAllwhitContribuyente();
		
        return view('cobros.recibo', ['menu' =>$menu, 'listado' => $listado, 'tipo' =>'recibo']);
    }

    public static function vista($id){
        $menu = MenuController::indexall();

        $info = Maestrofinca::getbyId($id);
        $obras = ModelsMasterobra::getbyId($info->proyecto);
        $bancos = ubicacion::getbancos();
        $contribuyentes = Contribuyente::getAll();
        $infocontribuyente = Contribuyente::getByid($info->contribuyente);

        return view('cobros.vistarecibo', ['menu' =>$menu, 'obra'=> $obras, 'info' =>$info, 'info_cont' =>$infocontribuyente, 'bancos'=>$bancos]);
    }

    public static function vistareimprimir(){
        $menu = MenuController::indexall();

        $listado =  Recibos::getallInfo();
        // dd( $listado);
        return view('cobros.reimpresion', ['menu' =>$menu, 'tipo' => 'reimp', 'recibos' => $listado]);
    }

    public static function vistareanular(){
        $menu = MenuController::indexall();

        $listado =  Recibos::getallInfo();
        // dd( $listado);
        return view('cobros.reimpresion', ['menu' =>$menu, 'tipo' => 'anulaimp', 'recibos' => $listado]);
    }

}
