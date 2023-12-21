<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class temp_det_pedido extends Model
{
    protected $table= 'temp_det_pedido';
    public $timestamps = false;
    use HasFactory;

    public static function insertdet($datos){

        $tabla = new temp_det_pedido();

        $tabla->n_pedido = $datos['n_pedido'];
        $tabla->tipo = $datos['tipo'];
        $tabla->id_detalle = $datos['id_detalle'];
        $tabla->detalle = $datos['detalle'];
        $tabla->adicional = $datos['adicional'];
        $tabla->cant = $datos['cant'];        
        $tabla->save();

        return $tabla;   
    }

    public static function getcarrito($usuario){
        $date = Carbon::parse(date(now()));
        $date1 = $date->subDay();
        $date2 = $date->addDay();

        $query = temp_det_pedido::leftjoin('temp_enc_pedido', 'temp_enc_pedido.id', 'temp_det_pedido.n_pedido')
                                ->where('temp_enc_pedido.usuario', $usuario)
                                ->where('temp_enc_pedido.agregado', 'NO')
                                ->where('temp_enc_pedido.fecha', '>', $date1)
                                ->where('temp_enc_pedido.fecha', '<', $date2)
                                ->get();
       
        return $query;
    }

    public static function getdetalle($pedido){
        $query = temp_det_pedido::where('n_pedido', $pedido)
                                ->get();

        return $query;
    }
}
