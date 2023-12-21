<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Usuarios extends Model
{
    protected $table= 'users';
    use HasFactory;

    public static function getAllUsers(){
        $datos = Usuarios::select('users.*', 'roles.name as rol', 'roles.id as rolid', 'd.departamento')
                        ->join('roles', 'users.rol', '=', 'roles.id')
                        ->join('departamentos as d', 'd.id', '=', 'users.departamento')
                        ->get();

        return $datos;
    }

   
}
