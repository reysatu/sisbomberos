<?php namespace App\Controllers;
use App\Models\UsuarioModel;


class Usuario extends BaseController
{
 
	public function viwagregar(){
			if(!isset($_SESSION['login'])){
				return redirect()->to(("LoginAdmin"));
			};
			$usuario=new UsuarioModel;
			$request=\Config\Services::request();
			//$data=array(""=>)
			$id=$request->getPostGet("id");
			if($this->session->get('idusuaT')){
				$id=$this->session->get('idusuaT');
			}
			
			$results=$usuario->Busuario($id);
			if (empty($results)){
					$idusuario=""; 
					$nombre="";
					$apellido="";
					$dni="";
					$email="";
					$user="";
					$pass="";
					$idperfil="";
					$perfil="";
					$telefono="";
			}else{
				$idusuario=$results->idusuario;
				$nombre=$results->nombre;
				$apellido=$results->apellido;
				$dni=$results->dni;
				$email=$results->email;
				$user=$results->user;
				$pass=$results->pass;
				$idperfil=$results->idperfil;
				$perfil=$results->descripcion;
				$telefono=$results->telefono;
			};
				$datosuser=array("nombre"=>$nombre,"apellido"=>$apellido,"dni"=>$dni,
								"email"=>$email,"user"=>$user,"pass"=>$pass,"idperfil"=>$idperfil,"idusuario"=>$idusuario,
								"telefono"=>$telefono,
								'perfil' => $usuario->getperfil(),);
		 		echo view('admin/header.php');
           		echo view('admin/menu.php');
          		echo view('usuario/form_usuario.php',$datosuser);
           		echo view('admin/footer.php');
        
	}
	public function add(){
			$usuario=new UsuarioModel;
			$request= \Config\Services::request();
			$id=$request->getPost("idusuario");
			$usua=$request->getPost("user");
			
			
				
			
			$data=array("nombre"=>$request->getPost("nombre"),
						"apellido"=>$request->getPost("apellido"),
						"dni"=>$request->getPost("dni"),
						"email"=>$request->getPost("email"),
						"user"=>$request->getPost("user"),
						"pass"=>$request->getPost("pass"),
						"idperfil"=>intval($request->getPost("perfil")),
						"idusuario"=>$request->getPost("idusuario"),
						"telefono"=>$request->getPost("tel"),);

			if($id==""){
				$validarU=$usuario->validarUser($usua);
				if(!empty($validarU->cantidad)){
				$alert="<div class='card-body'><div class='alert alert-danger' role='alert'>
        					El Usuario ya existe
        				</div></div>";
        				//$this->session->set('idusuaT',$id);
        				$this->session->setFlashdata('alert', $alert);
						return redirect()->to(site_url("Usuario/viwagregar"));
				};
				$usuario->insert($data);
				//$vista=view().view().view().view().view().view()
				$alert="<div class='card-body'><div class='alert alert-success' role='alert'>
        				El Registro se ingresó con ÉXITO
        				</div></div>";
        				$this->session->setFlashdata('alert', $alert);
				return redirect()->to(site_url("Usuario"));
			}else{
				
					$validarUpdate=$usuario->validarUserUpdate($id,$usua);
					if(!empty($validarUpdate->cantidad)){
					$alert="<div class='card-body'><div class='alert alert-danger' role='alert'>
        					El Usuario ya existe
        				</div></div>";
        				//$this->session->set('idusuaT',$id);
        				$this->session->setFlashdata('alert', $alert);
						return redirect()->to(site_url("Usuario/viwagregar?id=$id"));
					};
					$usuario->update($id,$data);
					$alert="<div class='card-body'><div class='alert alert-success' role='alert'>
        					El Registro se ingresó con ÉXITO
        				</div></div>";
        				$this->session->setFlashdata('alert', $alert);

					return redirect()->to(site_url("Usuario"));
				

				
			}
			
	}
	public function delete(){
		$usuario=new UsuarioModel;
		$request= \Config\Services::request();
		$id=$request->getPostGet("id");
		$usuario->delete($id);
	}
	public function index()
	{		//$db = \Config\Database::connect();
			//$query = $db->query('SELECT * FROM usuario'); 
			//$data=array('results' => $query->getResult(), );
		if(!isset($_SESSION['login'])){
				return redirect()->to(("LoginAdmin"));
			};
		$usuario=new UsuarioModel;
		$data=array('usuario' => $usuario->buscarusuario(),);
           echo view('admin/header.php');
           echo view('admin/menu.php');
           echo view('usuario/content.php',$data);
           echo view('admin/footer.php');
            
		
	}

	//--------------------------------------------------------------------

}
