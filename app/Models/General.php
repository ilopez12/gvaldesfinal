<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class General extends Model
{
    public $timestamps = false;
    use HasFactory;

    public static function getrestaurante(){
        $query = DB::table('restaurante')
            ->where('estatus', 'ACTIVO')
            ->get();

        return $query;
    }

    public static function getactivos($fecha){
        $query = DB::table('restaurante')
            ->leftJoin('menu', 'menu.restaurante', 'restaurante.id')
            ->where('restaurante.estatus', 'ACTIVO')
            ->where('menu.verdesde', '>=', $fecha)
            // ->where('menu.verhasta', '<=', $fecha)
            ->select('restaurante.*')
            ->distinct()
            ->get();

        return $query;
    }
}
