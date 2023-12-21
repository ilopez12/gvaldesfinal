<?php

namespace App\Http\Controllers;

// use App\Models\Contribuyente as ModelsContribuyente;

use App\Models\Contribuyente;
use App\Models\departamentos;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Notificaciones;
use Illuminate\Support\Facades\Auth;
use App\Models\Roles;
use App\Models\User;
use App\Models\Usuarios;
use Exception;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
	

	public function upconection(){
		if(Auth::user()->estatus == 'INACTIVO'){
			return redirect('/Inactive'); 
			
		}else{
			// $response =  User::uplastconection(Auth::user()->id);
		
			return redirect('/');   
		}
 
    }
	
	
	public function uindex()
	{
		$menu = MenuController::indexall();

		$usuarios = Usuarios::getAllUsers();

        return view('admin.userindex', ['menu' =>$menu, 'usuarios' => $usuarios]);
    }

	public function registroview()
	{
		$menu = MenuController::indexall();

		$roles = Roles::getActiveRoles();
		$departamentos = departamentos::getActiveDept();

        return view('auth.registro', ['menu' =>$menu, 'roles' =>$roles, 'dept'=>$departamentos]);
    }

	public function upuser($id){
		
		$menu = MenuController::indexall();

		$user = User::getgetUserbyId($id);		
		$lista_roles =  Roles::getActiveRoles();

		return view('admin.updateUser', ['menu' =>$menu, 'info_user' =>$user, 'lista_roles' =>$lista_roles]);

	}

	public function updateUser(Request $data){
		// dd($data);
	try{
		if ($data->estatus == 'INACTIVO'){
			$baja_date =  date(now());
			$baja_user =  $data->update_user;
		}else{
			$baja_date = null;
			$baja_user = null;
		}
		$envio = array(
			"id" => number_format($data->id),
			"nombre" => $data->nombre,
			"update_user" => $data->update_user,
			"email" => $data->email,
			"rol" => $data->rol,
			"id" => $data->id,
			"estatus" => $data->estatus,
			"fecha_baja" => $baja_date,
			"baja_user" => $baja_user
		);
		// dd($data);
		
		$save = User::updateUser($data);
		return json_encode($save);
	}catch (Exception $ex){
		dd($ex);
		return json_encode($ex);
	}
		
	}

	public function resetpass($id){
		try{
			
				// $passd = sha1(time());
			$passd = '12345678';
			$pass = Hash::make($passd);

			$reset = User::resetpass($id, $pass);
		    // ENVIO DE CORREO
			$info =  array(
				'pass'=> $passd,
			);
		    $email =  EmailController::index($info,'email.ResetPass');
			if ($email == true){
				return redirect()->back()->with('alert', 'Contraseña Reseteada!');
			}
		}catch(Exception $ex){
			dd($ex);
			return redirect()->back()->with('alert', 'No fue posible cambiar la contraseña');
		}
	}

	

	public function  create(Request $data)
    {
		// dd($data);
		try{
			if (!empty($data['password'])){
				$pass = Hash::make($data['password']);
			}else{
				// $passd = sha1(time());
				$passd = '12345678';
				$pass = Hash::make($passd);
			}
			$datos= User::create($data, $pass);
			// $info =  array(
			// 	'pass'=> $passd,
			// 	'nombre' => $data->name
			// );
		    // $email =  EmailController::index($info,'email.NewUserInterno');
			return redirect()->back()->with('success', 'usuario');

			// return true;

		}catch(Exception $ex){
			dd('error',$ex);
			return $ex->getCode()->errorInfo;
		} 
		
    }
	public function  validaemail(Request $data)
    {
		$datos= User::getUserbyemail($data->email);
		return json_encode($datos);
	}

	public function validacedula(Request $data){
		$datos= User::getUserbycedula($data->cedula);
		return json_encode($datos);
	}
	
	public function getuseractive(){
		$listado_usuario = User::getAllUsersActive();
		// dd($listado_usuario);
		return $listado_usuario;
	}
   	public function index()
	{
		return view('pages.index');
    }
	
	public function accordion()
	{
		return view('pages.accordion');
	}

	public function alerts()
	{
		return view('pages.alerts');
	}

	public function avatar()
	{
		return view('pages.avatar');
    }
    
    public function background()
	{
		return view('pages.background');
	}

	public function badge()
	{
		return view('pages.badge');
	}

	public function blog()
	{
		return view('pages.blog');
    }
    
    public function border()
	{
		return view('pages.border');
	}

	public function breadcrumbs()
	{
		return view('pages.breadcrumbs');
	}

	public function buttons()
	{
		return view('pages.buttons');
	}

	public function calendar()
	{
		return view('pages.calendar');
    }
    
    public function cards()
	{
		return view('pages.cards');
	}

	public function carousel()
	{
		return view('pages.carousel');
	}

	public function chartchartjs()
	{
		return view('pages.chartchartjs');
	}

	public function chartechart()
	{
		return view('pages.chartechart');
    }
    
    public function chartflot()
	{
		return view('pages.chartflot');
	}

	public function chartmorris()
	{
		return view('pages.chartmorris');
	}

	public function chartsparkpeity()
	{
		return view('pages.chartsparkpeity');
	}

	public function chat()
	{
		return view('pages.chat');
	}

	public function collapse()
	{
		return view('pages.collapse');
    }
    
    public function contacts()
	{
		return view('pages.contacts');
	}

	public function counters()
	{
		return view('pages.counters');
	}

	public function cryptobuysell()
	{
		return view('pages.cryptobuysell');
	}
	
	public function cryptocurrencyexchange()
	{
		return view('pages.cryptocurrencyexchange');
	}

	public function cryptodashbaord()
	{
		return view('pages.cryptodashbaord');
	}

	public function cryptomarket()
	{
		return view('pages.cryptomarket');
    }
    
    public function cryptotranscations()
	{
		return view('pages.cryptotranscations');
	}

	public function cryptowallet()
	{
		return view('pages.cryptowallet');
	}

	public function dangermessage()
	{
		return view('pages.dangermessage');
	}
	
	public function darggablecard()
	{
		return view('pages.darggablecard');
	}

	public function display()
	{
		return view('pages.display');
	}

	public function dropdown()
	{
		return view('pages.dropdown');
    }
    
    public function ecommerceaccount()
	{
		return view('pages.ecommerceaccount');
	}

	public function ecommercecart()
	{
		return view('pages.ecommercecart');
	}

	public function ecommercecheckout()
	{
		return view('pages.ecommercecheckout');
	}
	
	public function ecommercedashboard()
	{
		return view('pages.ecommercedashboard');
	}

	public function ecommerceorders()
	{
		return view('pages.ecommerceorders');
	}

	public function ecommerceproductdetails()
	{
		return view('pages.ecommerceproductdetails');
    }
    
    public function ecommerceproducts()
	{
		return view('pages.ecommerceproducts');
	}

	public function empty()
	{
		return view('pages.empty');
	}

	public function extras()
	{
		return view('pages.extras');
	}
	
	public function faq()
	{
		return view('pages.faq');
	}

	public function flex()
	{
		return view('pages.flex');
	}

	public function forgot()
	{
		return view('pages.forgot');
    }
    
    public function formadvanced()
	{
		return view('pages.formadvanced');
	}

	public function formeditor()
	{
		return view('pages.formeditor');
	}

	public function formelements()
	{
		return view('pages.formelements');
	}
	
	public function formlayouts()
	{
		return view('pages.formlayouts');
	}

	public function formvalidation()
	{
		return view('pages.formvalidation');
	}

	public function formwizards()
	{
		return view('pages.formwizards');
    }
    
    public function gallery()
	{
		return view('pages.gallery');
	}

	public function height()
	{
		return view('pages.height');
	}

	public function icons01()
	{
		return view('pages.icons01');
	}
	
	public function icons02()
	{
		return view('pages.icons02');
	}

	public function icons03()
	{
		return view('pages.icons03');
	}

	public function icons04()
	{
		return view('pages.icons04');
    }
    
    public function icons05()
	{
		return view('pages.icons05');
	}

	public function icons06()
	{
		return view('pages.icons06');
	}

	public function icons07()
	{
		return view('pages.icons07');
	}
	
	public function icons08()
	{
		return view('pages.icons08');
	}

	public function icons09()
	{
		return view('pages.icons09');
	}

	public function icons10()
	{
		return view('pages.icons10');
    }
    
    public function icons11()
	{
		return view('pages.icons11');
	}

	public function invoice()
	{
		return view('pages.invoice');
	}

	public function listgroup()
	{
		return view('pages.listgroup');
	}
	
	public function lockscreen()
	{
		return view('pages.lockscreen');
	}

	public function mailinbox()
	{
		return view('pages.mailinbox');
	}

	public function mapmapel()
	{
		return view('pages.mapmapel');
    }
    
    public function mapvector()
	{
		return view('pages.mapvector');
	}

	public function margin()
	{
		return view('pages.margin');
	}

	public function mediaobject()
	{
		return view('pages.mediaobject');
	}
	
	public function modals()
	{
		return view('pages.modals');
	}

	public function navigation()
	{
		return view('pages.navigation');
	}

	public function padding()
	{
		return view('pages.padding');
    }
    
    public function pagination()
	{
		return view('pages.pagination');
	}

	public function popover()
	{
		return view('pages.popover');
	}

	public function position()
	{
		return view('pages.position');
	}
	
	public function pricing()
	{
		return view('pages.pricing');
	}

	public function profile()
	{
		return view('pages.profile');
	}

	public function progress()
	{
		return view('pages.progress');
    }
    
    public function rating()
	{
		return view('pages.rating');
	}

	public function reset()
	{
		return view('pages.reset');
	}

	public function search()
	{
		return view('pages.search');
	}
	
	public function signin()
	{
		return view('pages.signin');
	}

	public function signup()
	{
		return view('pages.signup');
	}

	public function spinners()
	{
		return view('pages.spinners');
    }
    
    public function successmessage()
	{
		return view('pages.successmessage');
	}

	public function sweetalert()
	{
		return view('pages.sweetalert');
	}

	public function tablebasic()
	{
		return view('pages.tablebasic');
	}
	
	public function tabledata()
	{
		return view('pages.tabledata');
	}

	public function tags()
	{
		return view('pages.tags');
	}

	public function thumbnails()
	{
		return view('pages.thumbnails');
    }
    
    public function timeline()
	{
		return view('pages.timeline');
	}

	public function toast()
	{
		return view('pages.toast');
	}

	public function tooltip()
	{
		return view('pages.tooltip');
	}
	
	public function typography()
	{
		return view('pages.typography');
	}

	public function underconstruction()
	{
		return view('pages.underconstruction');
	}

	public function userlist()
	{
		return view('pages.userlist');
    }
    
    public function viewmail()
	{
		return view('pages.viewmail');
	}

	public function warningmessage()
	{
		return view('pages.warningmessage');
	}

	public function widgets()
	{
		return view('pages.widgets');
	}
	
	public function width()
	{
		return view('pages.width');
	}

	public function error404()
	{
		return view('pages.error404');
	}

	public function error500()
	{
		return view('pages.error500');
    }
    
}
