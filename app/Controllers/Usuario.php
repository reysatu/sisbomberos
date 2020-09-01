<?php namespace App\Controllers;
use App\Models\UsuarioModel;


class Usuario extends BaseController
{

	public function viwagregar(){
			$usuario=new UsuarioModel;
			$request=\Config\Services::request();
			//$data=array(""=>)

			$id=$request->getPostGet("id");
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
			};
				$datosuser=array("nombre"=>$nombre,"apellido"=>$apellido,"dni"=>$dni,
								"email"=>$email,"user"=>$user,"pass"=>$pass,"idperfil"=>$idperfil,"idusuario"=>$idusuario,
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
			$data=array("nombre"=>$request->getPost("nombre"),
						"apellido"=>$request->getPost("apellido"),
						"dni"=>$request->getPost("dni"),
						"email"=>$request->getPost("email"),
						"user"=>$request->getPost("user"),
						"pass"=>$request->getPost("pass"),
						"idperfil"=>intval($request->getPost("perfil")),
						"idusuario"=>$request->getPost("idusuario"),);
			if($id==""){
				$usuario->insert($data);
			}else{
				$usuario->save($data);
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
		$usuario=new UsuarioModel;
		$data=array('usuario' => $usuario->buscarusuario(),);
           echo view('admin/header.php');
           echo view('admin/menu.php');
           echo view('usuario/content.php',$data);
           echo view('admin/footer.php');
            
		
	}

	//--------------------------------------------------------------------

}