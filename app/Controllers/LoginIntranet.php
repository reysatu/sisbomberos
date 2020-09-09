<?php namespace App\Controllers;
use App\Models\LoginModel;
class LoginIntranet extends BaseController
{	
	public function __construct(){
		
	}
	public function index()
	{
            echo view('intranet/login.php');
	}

	//--------------------------------------------------------------------
	public function login(){
		$request=\Config\Services::request();
		
		$login=new LoginModel;
		$username=$request->getPostGet("username");
		$password=$request->getPostGet("password");
		$res=$login->validarusuarioIntranet($username,$password);
		if(!$res){
			return redirect()->to(site_url("LoginIntranet"));
		}else{
			
			$datasesion2 =[
				'idusuarioint'=>$res->idusuario,
				'perfilint'=>$res->descripcion,
				'nombreint'=>$res->nombre,
				'apellidoint'=>$res->apellido,
				'dniint'=>$res->dni,
				'emailint'=>$res->email,
				
				
				'loginint'=>true,
			];
			$this->session->set($datasesion2);
			return redirect()->to(site_url("Intranet"));
			//echo $this->session->get("nombre");				
		}
		
	}
	public function destroy (){
		$this->session->destroy();
		return redirect()->to(site_url());
	}
}
