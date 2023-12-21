<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class det_pedido extends Model
{
    protected $table= 'det_pedido';
    public $timestamps = false;
    use HasFactory;

    public static function insertdet($datos, $id){
        $tabla = new det_pedido();

        $tabla->n_pedido = $id;
        $tabla->tipo = $datos->tipo;
        $tabla->id_detalle = $datos->id_detalle;
        $tabla->detalle = $datos->detalle;
        $tabla->adicional = $datos->adicional;
        $tabla->cant = $datos->cant;      
        $tabla->save();

        return $tabla;   
    }
    public static function insertdirecto($datos, $id){
        $tabla = new det_pedido();

        $tabla->n_pedido = $datos['n_pedido'];
        $tabla->tipo = $datos['tipo'];
        $tabla->id_detalle = $datos['id_detalle'];
        $tabla->detalle = $datos['detalle'];
        $tabla->adicional = $datos['adicional'];
        $tabla->cant = $datos['cant'];      
        $tabla->save();

        return $tabla;   
    }

    public static function getdetalle($pedido){
        $query = det_pedido::where('n_pedido', $pedido)
                            ->get();

        return $query;
    }
}
