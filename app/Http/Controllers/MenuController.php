<?php

namespace App\Http\Controllers;

use App\Models\det_pedido;
use App\Models\enc_pedido;
use App\Models\General;
use App\Models\Menu;
use App\Models\ordenes;
use App\Models\temp_det_pedido;
use App\Models\temp_enc_pedido;
use Carbon\Carbon;
use Exception;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Exists;
use Illuminate\Support\Facades\Response;

class MenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $date = Carbon::now();

        $date->toDateString();
       
        $menu = Menu::getmenu($date->toDateString());
        $acomp = Menu::getacomp($date->toDateString());
        $restaurante = General::getactivos($date->toDateString());
        // $carrito = temp_enc_pedido::getcarrito(Auth::user()->email);
        $carrito = temp_enc_pedido::getcarrito('ILOPEZ');
        $ncantidad = count($carrito);
        // dd($ncantidad);
        $all = Menu::allMenu($date->toDateString());
        return view('user.menu', ['menu' => $menu, 'pendientes' => $ncantidad,'acomp' => $acomp, 'restaurante' =>$restaurante, 'menucomp' =>$all]);
    }

    public function ordenesday(){
        $date = Carbon::now();
        $date->toDateString();

        $menu = enc_pedido::getbyday($date->toDateString());
        // dd($menu);
        $total_pedidos = count($menu);
        $total = 0;
        foreach($menu as $item){
            $total = $item->total + $total;
        }
        // dd($menu);
        return view('user.ordenday', ['ordenes' => $menu, 'total' => $total, 'pedidos' =>$total_pedidos]);

    }
    public function carrito(){
        $date = Carbon::now();
        $date->toDateString();

        $menu = temp_enc_pedido::getcarrito('ILOPEZ');
        // dd($menu);
        
        if(count($menu) == 0){
            return redirect()->back()->with('carrito_no', 'orden');
        }else{
            $total_pedidos = count($menu);
            $total = 0;
            $det_pedido = '';
            $arreglo =[];
            foreach($menu as $item){
                $total = $item->total + $total;
                $detalle = temp_det_pedido::getdetalle($item->id);
                if($item->solicitante == null){
                    $solicitante = 'PROPIO';
                }else{
                    $solicitante = $item->solicitante;
                }
                foreach($detalle as $k => $val2){
                    if($k == 0 ){
                        $det_pedido = $val2->cant. ' '.$val2->detalle;
                     
                    }else{
                        $det_pedido = $det_pedido.', '. $val2->cant. ' '.$val2->detalle;
                    }   
                }

                $temp =[
                    'orden_d' =>$solicitante,
                    'detalle' =>$det_pedido,
                    'total' =>$item->total,

                ];

                array_push($arreglo, $temp);
            }
            
                // dd($arreglo);
            

            return view('user.carrito', ['ordenes' => $arreglo, 'total' => $total, 'pedidos' =>$total_pedidos]);
        }
       

    }

    public function all(){
        $date = Carbon::now();
        $date->toDateString();

        $menu = enc_pedido::getall('ILOPEZ');
        // dd($menu);
        
        if(count($menu) == 0){
            return redirect()->back()->with('carrito_no', 'orden');
        }else{
            $total_pedidos = count($menu);
            $total = 0;
            $det_pedido = '';
            $arreglo =[];
            $encabezado = '';
            foreach($menu as $item){
                $total = $item->total + $total;
                $detalle = det_pedido::getdetalle($item->id);
                if($item->solicitante == null){
                    $solicitante = 'PROPIO';
                }else{
                    $solicitante = $item->solicitante;
                }
                foreach($detalle as $k => $val2){
                    if($k == 0 ){
                        $det_pedido = $val2->cant. ' '.$val2->detalle;
                     
                    }else{
                        $det_pedido = $det_pedido.', '. $val2->cant. ' '.$val2->detalle;
                    }   
                    if($val2->tipo == 'Proteina'){
                        $encabezado = $val2->detalle;
                    }
                }

                $temp =[
                    'orden_d' =>$solicitante,
                    'encabezado' =>$encabezado,
                    'detalle' =>$det_pedido,
                    'total' =>$item->total,
                    'estatus' => $item->estatus,
                    'fecha' =>Carbon::parse($item->fecha)->format('d/m/Y'),

                ];

                array_push($arreglo, $temp);
            }
            
                // dd($arreglo);
            
                $carrito = temp_enc_pedido::getcarrito('ILOPEZ');
                $ncantidad = count($carrito);
            return view('user.pedidos', ['ordenes' => $arreglo, 'pendientes' => $ncantidad,'total' => $total, 'pedidos' =>$total_pedidos]);
        }
       

    }



    public function generarenvio(){
        $date = Carbon::now();
        $date->toDateString();
        $pedido_detalle = [];
        $det_pedido = '';
        $monto = 0;
        $content = '';
        $menu = enc_pedido::getbyday($date->toDateString());
        foreach($menu as $val){
            
            $pedidos2 = det_pedido::getdetalle($val->id); 
            $ordenado = $val->solicitante;
            $monto = $val->total;
            foreach($pedidos2 as $k => $val2){
                
                if($k == 0 ){
                    $det_pedido = $val2->cant. ' '.$val2->detalle;
                 
                }else{
                    $det_pedido = $det_pedido.', '. $val2->cant. ' '.$val2->detalle;
                }
                
           
            }
            $det_pedido = $ordenado.' '. $det_pedido. ' '. $val2->dato_adicional;
            $content = $content.';\n'. $ordenado.' '.$det_pedido;

               
            $temp = [
                // $ordenado,
                $det_pedido,

            ];
           array_push($pedido_detalle,$temp);
           
            // $enc = temp_enc_pedido::updateenc($val->id);  
        }
         // Ruta y nombre del archivo
        //  $path = 'C:\xampp\htdocs\gvaldes2';
        $filename = 'archivo.txt';

        $file = fopen('php://temp', 'w');
         foreach ($pedido_detalle as $row) {
             fputcsv($file, $row);
         }
 
         rewind($file);
        $csvContent = stream_get_contents($file);
        fclose($file);

        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ];

        return Response::make($csvContent, 200, $headers);
        // return redirect()->back()->with('succes', 'orden');
    }
    public function getpedidos(Request $datos){
    //    dd($datos);
        try{
            if($datos->usuario != 0){

                if($datos->desde != null){
                    $desde = new Carbon($datos->desde);
                    $hasta = new Carbon($datos->hasta);
                    $pedidos = enc_pedido::getbyrangoUser($desde->toDateString(), $hasta->toDateString(), $datos->usuario);
                }else{
                    $pedidos = enc_pedido::getbyusuario($datos->usuario);
                }
            }else if($datos->desde != null && $datos->usuario == 0){
                $desde = new Carbon($datos->desde);
                $hasta = new Carbon($datos->hasta);

                $pedidos = enc_pedido::getbyrango($desde->toDateString(), $hasta->toDateString());
            }

                // dd($pedidos, $desde, );
            
            return $pedidos;
        }catch(Exception $ex){
            dd($ex);
        }
       

    }

    public function addpedidos(Request $datos){
        // dd( $datos);
        try{

            if($datos->orden_propia == 'no'){
                $solicitante = $datos->orden_d;
            }else{
                $solicitante = Auth::user()->name;
            }
            $data = Menu::getmenubyId($datos->proteina);
            $total_proteina = 0;
            if($datos->proteina != null){
                $total_proteina = $data->costo;
            }   
            $adicional_p = 0;
            $adicional_a = 0;
            if($datos->cant > 1){
                $total_proteina = $total_proteina + ($datos->costo_ad * $datos->cant);
                $adicional_p = ($datos->costo_ad * $datos->cant);
            }
       
            // ADICIONALES
            if($datos->adicional != null){
                foreach($datos->adicional as $key => $val){
                    $data = Menu::getmenubyId($val);
                    $adicional_a = $adicional_a + $data->costo_adicional;
                    
                }
            }
            $total = $total_proteina + $adicional_p + $adicional_a;

            $data =[
                'propia' => $datos->orden_propia,
                'usuario' => 'ILOPEZ',
                'solicitante' => $solicitante,
                'fecha' => date(now()),
                'total_prot' => $total_proteina,
                'prot_adc' => $adicional_p,
                'acomp_adc' => $adicional_a,
                'total' => $total,
                'datos_adicionales' =>  $datos->coments,
            ];
            //INSERTAR EL PEDIDO 
            $encab = temp_enc_pedido::insertenc($data);

            //INSERTA DETALLE
            if($datos->proteina != null){
                $info = Menu::getmenubyId($datos->proteina);
                    $adc = 'NO';
                    if($datos->cant > 1){
                        $adc = 'SI';
                    }
                    $detalle = [
                        'n_pedido'=> $encab->id,
                        'tipo'=> 'Proteina',
                        'id_detalle'=> $datos->proteina,
                        'detalle'=> $info->nombre,
                        'adicional'=> $adc,
                        'cant'=> $datos->cant,
                    ];
                    $det = temp_det_pedido::insertdet($detalle);
            }
            if($datos->acomp != null){
                foreach($datos->acomp as $key => $val){
                    $info = Menu::getmenubyId($val);

                        $adc = 'NO';
                        // if($datos->cantA[$key] > 1){
                        //     $adc = 'SI';
                        // }
                        $detalle = [
                            'n_pedido'=> $encab->id,
                            'tipo'=> 'Acomp',
                            'id_detalle'=> $val,
                            'detalle'=> $info->nombre,
                            'adicional'=> $adc,
                            'cant'=> 1,
                        ];
                        $det = temp_det_pedido::insertdet($detalle);
                }
            }
            if($datos->adicional != null){
                foreach($datos->adicional as $key => $val2){
                    $info = Menu::getmenubyId($val2);
    
                        $adc = 'NO';
                        // if($datos->cantA[$key] > 1){
                        //     $adc = 'SI';
                        // }
                        $detalle = [
                            'n_pedido'=> $encab->id,
                            'tipo'=> 'Adic',
                            'id_detalle'=> $val2,
                            'detalle'=> 'Orden Adicional '.$info->nombre,
                            'adicional'=> $adc,
                            'cant'=> 1,
                        ];
                        $det = temp_det_pedido::insertdet($detalle);
                }
            }
            
            
        
            return true;
                   
        }catch(Exception $ex){
            dd($ex);
        }
    }
    public function ordenar(){
    
        try{
        $pedidos = temp_enc_pedido::getcarrito('ILOPEZ');

        if(count($pedidos) == 0){
          
            return redirect()->back()->with('Sin', 'Acomp');
        }else{
            //1. AGREGAR AL ENCABEZADO
            foreach($pedidos as $val){
                $enc = enc_pedido::insertenc($val);
                $pedidos2 = temp_det_pedido::getdetalle($val->id); 
                // dd($pedidos2);
                foreach($pedidos2 as $val2){
                    det_pedido::insertdet($val2,$enc->id );
                }
                $enc = temp_enc_pedido::updateenc($val->id);  
            }
        }
            return redirect('/menu');
                    
        }catch(Exception $ex){
            return false;
        }
    }

    public function ordenarInm(Request $datos){
            dd($datos,7);
        try{
            if($datos->orden_propia == 'no'){
                $solicitante = $datos->orden_d;
            }else{
                $solicitante = Auth::user()->name;
            }
            $data = Menu::getmenubyId($datos->proteina);
            $total_proteina = $data->costo;

            $adicional_p = 0;
            $adicional_a = 0;
            if($datos->cant > 1){
                $total_proteina = $total_proteina + ($datos->costo_ad * $datos->cant);
                $adicional_p = ($datos->costo_ad * $datos->cant);
            }
       
            // ADICIONALES
            if($datos->adicional != null){
                foreach($datos->adicional as $key => $val){
                    $data = Menu::getmenubyId($val);
                    $adicional_a = $adicional_a + $data->costo_adicional;
                    
                }
            }
            $total = $total_proteina + $adicional_p + $adicional_a;

            $data =[
                'propia' => $datos->orden_propia,
                'usuario' => 'ILOPEZ',
                'solicitante' => $solicitante,
                'fecha' => date(now()),
                'total_prot' => $total_proteina,
                'prot_adc' => $adicional_p,
                'acomp_adc' => $adicional_a,
                'total' => $total,
                'datos_adicionales' =>  $datos->coments,
            ];
            //INSERTAR EL PEDIDO 
            $encab = enc_pedido::insertdirecto($data);

            //INSERTA DETALLE
            $info = Menu::getmenubyId($datos->proteina);
                $adc = 'NO';
                if($datos->cant > 1){
                    $adc = 'SI';
                }
                $detalle = [
                    'n_pedido'=> $encab->id,
                    'tipo'=> 'Proteina',
                    'id_detalle'=> $datos->proteina,
                    'detalle'=> $info->nombre,
                    'adicional'=> $adc,
                    'cant'=> $datos->cant,
                ];
                $det = det_pedido::insertdirecto($detalle, $encab->id);

            if($datos->acomp != null){
                foreach($datos->acomp as $key => $val){
                    $info = Menu::getmenubyId($val);

                        $adc = 'NO';
                        // if($datos->cantA[$key] > 1){
                        //     $adc = 'SI';
                        // }
                        $detalle = [
                            'n_pedido'=> $encab->id,
                            'tipo'=> 'Acomp',
                            'id_detalle'=> $val,
                            'detalle'=> $info->nombre,
                            'adicional'=> $adc,
                            'cant'=> 1,
                        ];
                        $det = det_pedido::insertdirecto($detalle, $encab->id);
                }
            }
            if($datos->adicional != null){
                foreach($datos->adicional as $key => $val2){
                    $info = Menu::getmenubyId($val2);
    
                        $adc = 'NO';
                        // if($datos->cantA[$key] > 1){
                        //     $adc = 'SI';
                        // }
                        $detalle = [
                            'n_pedido'=> $encab->id,
                            'tipo'=> 'Adic',
                            'id_detalle'=> $val2,
                            'detalle'=> 'Orden Adicional '.$info->nombre,
                            'adicional'=> $adc,
                            'cant'=> 1,
                        ];
                        $det = det_pedido::insertdirecto($detalle, $encab->id);
                }
            }
            
            
        
            return true;
                    
        }catch(Exception $ex){
            dd($ex);
            return false;
        }
    }

    public function ordendirecto(Request $data){
        try{
        $pedidos = temp_enc_pedido::getcarrito('ILOPEZ');
        if(count($pedidos) == 0){
          
            return redirect()->back()->with('Sin', 'Acomp');
        }else{
            //1. AGREGAR AL ENCABEZADO
            foreach($pedidos as $val){
                $enc = enc_pedido::insertenc($val);
                $pedidos2 = temp_det_pedido::getdetalle($val->id); 
                // dd($pedidos2);
                foreach($pedidos2 as $val2){
                    det_pedido::insertdet($val2,$enc->id );
                }
                $enc = temp_enc_pedido::updateenc($val->id);  
            }
        }
            return true;
                    
        }catch(Exception $ex){
            return false;
        }
    }


    public function save(Request $datos){
        // dd( isset($datos->acp));
        try{

            if(isset($datos->acp) == false){
                return redirect()->back()->with('falta', 'Acomp');
            }
            if(isset($datos->proteina) == false){
                return redirect()->back()->with('falta', 'Proteina');
            }
            
            $acp = [];
            foreach($datos->acp as $item){
                array_push($acp, $item);
            }
        
            $save = ordenes::create($datos, json_encode($acp));

            return redirect()->back()->with('success', 'Orden Creada');

        }catch(Exception $ex){
            dd($ex);
        }
        
        
    }
}
