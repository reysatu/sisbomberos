<?php namespace App\Controllers;
use App\Models\LoginModel;
use App\Models\UsuarioModel;
use App\Models\detalleArchivoModel;

class Convocatoria extends BaseController
{	
	public function __construct(){
		
	}
	public function index()
	{
            echo view('Convocatoria/login.php');
	}

	//--------------------------------------------------------------------
	public function login(){
		$request=\Config\Services::request();
		
		$login=new LoginModel;
		$username=$request->getPostGet("username");
		$password=$request->getPostGet("password");
		if ($username=="" || $password==""){
			$alert="Usuario o Contraseña errónea";
			$this->session->setFlashdata('alert', $alert);
			return redirect()->to(site_url("Convocatoria"));	
		}

		$res=$login->validarusuarioConvocatoria($username,$password);
		if(!$res){
			$alert="Usuario o Contraseña errónea";
			$this->session->setFlashdata('alert', $alert);
			return redirect()->to(site_url("Convocatoria"));
		}else{
			
			$datasesion2 =[
				'idusuarioint'=>$res->idusuario,
				'perfilint'=>$res->descripcion,
				'nombreint'=>$res->nombre,
				'apellidoint'=>$res->apellido,
				'dniint'=>$res->dni,
				'emailint'=>$res->email,
				'telefonoint'=>$res->telefono,
				
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
	public function CrearCuenta(){
		  echo view('convocatoria/loginCrear.php');
	}
	public function registrarNew(){
		$email = \Config\Services::email();
		$UsuarioModel=new UsuarioModel;
		$request=\Config\Services::request();
		$username=$request->getPostGet("username");
		$apellidos=$request->getPostGet("apellidos");
		$telefono=$request->getPostGet("telefono");
		$correo=$request->getPostGet("email");
		$valG=$UsuarioModel->validarGmail($correo);
		if (!empty($valG)){
			$alert2="El Correo electrónico ya está siendo usado";
			$this->session->setFlashdata('alert2', $alert2);
			return redirect()->to(site_url("Convocatoria/CrearCuenta"));
		};
		$user=$request->getPostGet("user");
		$password=$request->getPostGet("password");
		$hash=md5(rand(0,1000));
		$valor=$hash;
		
		$data = array('nombre' =>$username ,
					'apellido'=>$apellidos,
					'email'=>$correo,
					'idperfil'=>2,
					'user'=>$correo,
					'telefono'=>$telefono,
					'pass'=>$password,
					'hash'=>$valor);
		$UsuarioModel->insert($data);
		$base=base_url();
		$ms="
		Por favor ingresar al siguiente enlace:
		$base/Convocatoria/activarCuenta?correo=$correo&hash=$hash";
		$email->setFrom('reysangama7@gmail.com', 'Bomberos Tarapoto');
		$email->setTo($correo);
		
		$email->setSubject('Verficación de correo electrónico');
		$email->setMessage($ms);
		$email->send();
		$alert="<div class='card-body'><div class='alert alert-info' role='alert'>
        					Se envió un enlace a su correo
        				</div></div>";
        $this->session->setFlashdata('alert', $alert);

		return redirect()->to(site_url("Convocatoria/CrearCuenta"));
	}
	public function activarCuenta(){
		$request=\Config\Services::request();
		$correo=$request->getPostGet("correo");
		$hash=$request->getPostGet("hash");
		$idRecup=$request->getPostGet("idRecup");
		if(empty($idRecup)){
			$idRecup="";
		}else{
			$idRecup=$idRecup;
		}
		$data=array("correo"=>$correo,"hash"=>$hash,"idRecup"=>$idRecup);
		echo view('Convocatoria/CrearContra.php',$data);
		
	}
	public function activarPass(){
		$UsuarioModel=new UsuarioModel;
		$detalleArchivoModel=new detalleArchivoModel;
		$request=\Config\Services::request();
		$correo=$request->getPostGet("correo");
		$hash=$request->getPostGet("hash");
		$password=$request->getPostGet("password1");
		$idRecup=$request->getPostGet("idRecup");
		if(empty($idRecup)){
			$val=$UsuarioModel->validarUsuarioCorreo($correo,$hash);
			$id=$val->idusuario;
			$archivos=$UsuarioModel->getIdArchivos();
			foreach ($archivos as $field){
				 	$data=array("idarchivo"=>$field->idarchivo,
								"idusuario"=>$id,);
					$detalleArchivoModel->insert($data);
			};
			
		}else{
			$val=$UsuarioModel->validarGmail($correo,$hash);
			$id=$val->idusuario;
		}
		
		if($val){
			$data=array("pass"=>$password,"active"=>1);
			$UsuarioModel->update($id, $data);
			$alert5="<div class='card-body'><div class='alert alert-info' role='alert'>
        				Ya puede ingresar a su cuenta 
        				</div></div>";
       	 $this->session->setFlashdata('alert5', $alert5);
       	 
		}
		
	}
	// public function recu(){
	// 	$UsuarioModel=new UsuarioModel;
	// 	$request=\Config\Services::request();
	// 	$correo=$request->getPostGet("correo");
	// 	$hash=$request->getPostGet("hash");
	// 	$password=$request->getPostGet("password1");
	// 	$val=$UsuarioModel->validarGmail($correo,$hash);
	// 	$id=$val->idusuario;
	// 	if($val){
	// 		$data=array("pass"=>$password,"active"=>1);
	// 		$UsuarioModel->update($id, $data);
	// 		$alert="<div class='card-body'><div class='alert alert-info' role='alert'>
 //        				Ya puede ingresar a su cuenta 
 //        				</div></div>";
 //       	 $this->session->setFlashdata('alert2', $alert);
 //       	 return redirect()->to(site_url("Convocatoria"));
	// 	}
	// }
	public function  recuperaContra(){
		 echo view('convocatoria/recupera.php');
	}
	public function RecuperaContrasena(){
		$email = \Config\Services::email();
		$UsuarioModel=new UsuarioModel;
		$request=\Config\Services::request();
		$correo=$request->getPostGet("email");
		$valida=$UsuarioModel->validarGmail($correo);
		
		$base=base_url();
		if (empty($valida->email)){
			$alert="<div class='card-body'><div class='alert alert-danger' role='alert'>
        					Correo no existe
        				</div></div>";
        	$this->session->setFlashdata('alert', $alert);

			return redirect()->to(site_url("Convocatoria/recuperaContra"));
		}else{
			$hash=$valida->hash;

			$ms="
			Por favor ingresar al siguiente enlace:
			$base/Convocatoria/activarCuenta?correo=$correo&hash=$hash&idRecup=1";
			$email->setFrom('reysangama7@gmail.com', 'Bomberos Tarapoto');
			$email->setTo($correo);
		
			$email->setSubject('Recuperar Contraseña');
			$email->setMessage($ms);
			$email->send();
			$alert="<div class='card-body'><div class='alert alert-info' role='alert'>
        					Se envió un enlace a su correo
        				</div></div>";
        	$this->session->setFlashdata('alert', $alert);

			return redirect()->to(site_url("Convocatoria/recuperaContra"));
		}

	}

}
