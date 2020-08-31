<?php namespace App\Controllers;
use App\Models\LoginModel;
class LoginAdmin extends BaseController
{	
	public function __construct(){
		
	}
	public function index()
	{
            echo view('admin/login.php');
	}

	//--------------------------------------------------------------------
	public function login(){
		$request=\Config\Services::request();
		
		$login=new LoginModel;
		$username=$request->getPostGet("username");
		$password=$request->getPostGet("password");
		$res=$login->validarusuario($username,$password);
		if(!$res){
			return redirect()->to(site_url("LoginAdmin"));
		}else{
			$idperfil=$res->idperfil;
			$modulos=$login->getModulos($idperfil);
			$datasesion =[
				'nombre'=>$res->nombre,
				'perfil'=>$res->perfil,
				'modulos'=>$modulos,
				'login'=>true
			];
			$this->session->set($datasesion);
			return redirect()->to(site_url("Admin"));
			//echo $this->session->get("nombre");				
		}
		
	}
	public function destroy (){
		$this->session->destroy();
		return redirect()->to(site_url("LoginAdmin"));
	}
}
