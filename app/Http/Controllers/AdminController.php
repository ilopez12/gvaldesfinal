<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function save(Request $datos){
        
        
        try{
            //INSERTANDO LAS PROTEINAS
            $arreglo = [];
            if($datos->proteina[0] != null){
                foreach($datos->proteina as $key => $item){
                    $temp = [
                        'nombre' => $item,
                        'tipo' => 'Proteina',
                        'create' => 'Sistema',
                        'desde' => $datos->desde,
                        'hasta' => $datos->hasta,
                        'restaurante' =>$datos->lugar[$key],
                        'cantAcomp' => $datos->cantacomp[$key],
                        'tipo_comida' =>  $datos->tipo[$key],
                        'costo' => floatval($datos->costo[$key]),
                        'adicional' => floatval($datos->adicionalP[$key]),
                    ];
                    Menu::create($temp);
                    array_push($arreglo, $temp);
            }
            }
            
            
            // dd($datos);
            if($datos->acomp[0] != null){
                foreach($datos->acomp as $key => $item){
                        $temp = [
                            'nombre' => $item,
                            'tipo' => 'Acomp',
                            'create' => 'Sistema',
                            'restaurante' =>$datos->lugar2[$key],
                            'cantAcomp' => 0,
                            'tipo_comida' => 6,
                            'costo' => 0,
                            'adicional' => floatval($datos->adicionalA[$key]),
                        ];
                        Menu::create($temp);
                        array_push($arreglo, $temp);
                }
            }
            return redirect()->back()->with('guardada', 'Orden Creada');
 

        }catch(Exception $ex){
            dd($ex);
        }
        


    }

    public function getmenu(Request $datos){
        $desde = new Carbon($datos->desde);
        $desde =  $desde->subDay();
        $hasta = new Carbon($datos->hasta);
        $hasta =  $hasta->addDay();

        $menu =  Menu::getbyRango($desde->toDateString(), $hasta->toDateString());

        return $menu;
    }
}
