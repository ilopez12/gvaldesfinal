<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enc_pedido extends Model
{
    protected $table= 'enc_pedido';
    public $timestamps = false;
    use HasFactory;

    public static function insertenc($datos){
        // dd($datos);
        $tabla = new enc_pedido();

        $tabla->propia = $datos->propia;
        $tabla->agregado = 'NO';
        $tabla->usuario = $datos->usuario;
        $tabla->solicitante = $datos->solicitante;
        $tabla->fecha = $datos->fecha;
        $tabla->total_prot = $datos->total_prot;
        $tabla->prot_adc = $datos->prot_adc;
        $tabla->acomp_adc = $datos->acomp_adc;
        $tabla->total = $datos->total;
        $tabla->dato_adicional = $datos->datos_adicionales;
        
        $tabla->save();

        return $tabla;   
    }
    public static function insertdirecto($datos){
        // dd($datos);
        $tabla = new enc_pedido();

        $tabla->propia = $datos['propia'];
        $tabla->agregado = 'SI';
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
    public static function getbyday(){
       
        $date1 = Carbon::parse(date(now()));
        $date1 = $date1->subDay();
        $date2 = Carbon::parse(date(now()));
        $date2 = $date2->addDay();
       
        $query = enc_pedido::where('fecha', '>', $date1)
                                ->where('fecha', '<', $date2)
                                ->get();

        return $query;
      
    }
    public static function getbyrango($desde, $hasta){
        $date1 = Carbon::parse($desde);
        $date1 = $date1->subDay();
        $date2 = Carbon::parse($hasta);
        $date2 = $date2->addDay();
        // dd();
        $query = enc_pedido::where('fecha', '>=', $date1)
                                ->where('fecha', '<=', $date2)
                                ->get();

        return $query;
      
    }
    public static function getbyrangoUser($desde, $hasta, $usuario){
        $date1 = Carbon::parse($desde);
        $date1 = $date1->subDay();
        $date2 = Carbon::parse($hasta);
        $date2 = $date2->addDay();
        // dd();
        $query = enc_pedido::where('fecha', '>=', $date1)
                                ->where('fecha', '<=', $date2)
                                ->where('usuario', '<=', $usuario)
                                ->get();

        return $query;
      
    }
    public static function getbyusuario( $usuario){
       
        $query = enc_pedido::where('usuario', '<=', $usuario)
                                ->get();

        return $query;
      
    }
  
    public static function getall($usuario){
        $query = enc_pedido::where('usuario', $usuario)
                                ->get();

        return $query;
    }
        
    public static function getenviados(){
       
        $date1 = Carbon::parse(date(now()));
        $date1 = $date1->subDay();
        $date2 = Carbon::parse(date(now()));
        $date2 = $date2->addDay();
       
        $query = enc_pedido::where('agregado', 'SI')
                                ->where('fecha', '>', $date1)
                                ->where('fecha', '<', $date2)
                                ->get();

        return $query;
      
    }
  
}


