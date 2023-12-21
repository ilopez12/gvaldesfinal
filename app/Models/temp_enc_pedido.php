<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class temp_enc_pedido extends Model
{
    protected $table= 'temp_enc_pedido';
    public $timestamps = false;
    use HasFactory;

    public static function insertenc($datos){
        $tabla = new temp_enc_pedido();

        $tabla->propia = $datos['propia'];
        $tabla->agregado = 'NO';
        $tabla->usuario = $datos['usuario'];
        $tabla->solicitante = $datos['solicitante'];
        $tabla->fecha = $datos['fecha'];
        $tabla->total_prot = $datos['total_prot'];
        $tabla->prot_adc = $datos['prot_adc'];
        $tabla->acomp_adc = $datos['acomp_adc'];
        $tabla->total = $datos['total'];
        $tabla->dato_adicional = $datos['datos_adicionales'];
        
        $tabla->save();

        return $tabla;   
    }

    public static function getcarrito($usuario){
       
        $date1 = Carbon::parse(date(now()));
        $date1 = $date1->subDay();
        $date2 = Carbon::parse(date(now()));
        $date2 = $date2->addDay();
       
        $query = temp_enc_pedido::where('usuario', $usuario)
                                ->where('agregado', 'NO')
                                ->where('fecha', '>', $date1)
                                ->where('fecha', '<', $date2)
                                ->get();

        return $query;
      
    }

    public static function updateenc($id){
        
        $tabla = temp_enc_pedido::find($id);
        $tabla->agregado = 'SI';
        $tabla->save();

        return $tabla;
    }

   
}
