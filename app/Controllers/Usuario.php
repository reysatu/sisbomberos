<?php namespace App\Controllers;
use App\Models\UsuarioModel;


class Usuario extends BaseController
{

	public function viwagregar(){
			$usuario=new UsuarioModel;
			$request=\Config\Services::request();
			//$data=array(""=>)
			$id=$request->getPostGet("id");
			if (empty($id)){
				$id="";
				$datosuser=array('usuario' => $usuario->Busuario($id),
								'perfil' => $usuario->getperfil(),);
		 		echo view('admin/header.php');
           		echo view('admin/menu.php');
          		echo view('content/form_usuario.php',$datosuser);
           		echo view('admin/footer.php');
			}else{
				
				$datosuser=array('usuario' => $usuario->Busuario($id),
								'perfil' => $usuario->getperfil(),);
		 		echo view('admin/header.php');
           		echo view('admin/menu.php');
          		echo view('content/form_usuario.php',$datosuser);
           		echo view('admin/footer.php');
			}
			
       
        
	}
	public function add(){

	}
	public function index()
	{		//$db = \Config\Database::connect();
			//$query = $db->query('SELECT * FROM usuario'); 
			//$data=array('results' => $query->getResult(), );
		$usuario=new UsuarioModel;
		$data=array('usuario' => $usuario->buscarusuario(),);
           echo view('admin/header.php');
           echo view('admin/menu.php');
           echo view('content/usuario.php',$data);
           echo view('admin/footer.php');
            
		
	}

	//--------------------------------------------------------------------

}
