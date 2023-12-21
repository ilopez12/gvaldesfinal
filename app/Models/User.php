<?php

namespace App\Models;

use Exception;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    public $timestamps = false;
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'telefono',
        'password',
        'rol',
        'estatus',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function getmenubycelular($id){
        $query = User::where('email',$id)
                    ->first();

       return $query;
    }

    
    public static function updateUser($item){    

        
        $user = User::find($item->id);
 
        $user->name = $item->nombre;
        $user->rol = $item->rol;
        $user->updated_at = date(now());
        $user->update_user = $item->update_user;
        
        $user->Estatus = $item->estatus;

        $user->fecha_baja = null;
        $user->baja_user = null;

        if ($item->estatus == 'INACTIVO'){
            $user->fecha_baja = date(now()) ;
            $user->baja_user = $item->update_user;
        }         
        $user->save();

         return $user; 
       
    }
    public static function resetpass($id, $pass){
        try{
            
        // $passd = sha1(time());
        // $passd = '12345678';
        // $pass = Hash::make($passd);
        $user = User::find($id);
        $user->password = $pass;
        $user->resetpass_at = date(now());

        $user->save();

        return $pass; 
        }catch(Exception $ex){

            return $ex;
        }  
    }
    public static function create($data, $pass){
        // dd($data);
 
            $table = new User();
            $table->name = $data->nombre;
            $table->email = $data->email;
            $table->telefono = $data->email;
            $table->rol = 1;
            $table->estatus = 'ACTIVO'; 
            $table->password = $pass;
            $table->save();
            return $table;
       
    }

    public static function createContribuyente($data, $token, $datos){
        // dd($data->nombre);
 
            $table = new User();
            $table->name = $data->nombre;
            $table->email = $datos->email;

            $table->cedula = $data->cedula;
            $table->ruc = $datos->ruc;
            // $table->dv = $datos->dv;
            $table->departamento = 0;
            $table->rol = 34;
            $table->Estatus = 'EN ESPERA'; 
            $table->password = Hash::make($datos->password);
            $table->created_at = date(now());
            $table->created_user = $datos->email;
            $table->email_verified_at= date(now());
            $table->remember_token= $token;
            $table->save();
            return $table;
       
    }

    public static function updateUserContribuyente($item, $token, $email){
        $user = User::find($item->id);
 
        $user->remember_token = $token;
        $user->email = $email;
        $user->email_verified_at = date(now());
        
        $user->save();

         return $user; 
    }

    public static function getall(){
        $user = User::get();

        return $user;
    }

   
}
