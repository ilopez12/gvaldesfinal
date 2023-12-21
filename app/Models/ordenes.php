<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ordenes extends Model
{
    protected $table= 'ordenes';
    public $timestamps = false;
    use HasFactory;

    public static function create($datos, $acomp){

        $tabla = new ordenes();

        $tabla->fecha = date(now());
        $tabla->solicitado = 'Prueba';
        if($datos->tipo_orden == 'no'){
            $tabla->para = $datos->orden_d;
        }else{
            $tabla->para = 'Prueba';
        }

        $tabla->monto_inicial = $datos->costo;
        $tabla->monto_adicional = $datos->costo_adicional;
        $tabla->total = $datos->costo + $datos->costo_adicional;
        $tabla->proteina = json_encode($datos->proteina);
        $tabla->acomp = $acomp;
        $tabla->comentarios = $datos->coments;

        $tabla->save();

        return $tabla;  
    }

    public static function insertenc($datos){

    }


    public static function getbyday($dia){
        $query = ordenes::where('fecha' , $dia)
                        ->get();
        return $query;
    }

    public static function getbyrango($desde, $hasta){
        $query = ordenes::where('fecha' ,'>=',  $desde)
                        ->where('fecha' ,'<=',  $hasta)
                        ->get();
        return $query;
    }
    public static function getall(){
        $query = ordenes::orderby('fecha')
                        ->get();
        return $query;
    }


    public static function updateenviada($id){
        $tabla = ordenes::find($id);

        $tabla->enviada = 'SI';

        $tabla->save();

        return $tabla;
    }
}
