<?php namespace App\Controllers;
use App\Models\NosotrosModel;
class NosotrosA extends BaseController
{ 
	public function index(){
		if(!isset($_SESSION['login'])){ 
				return redirect()->to(("LoginAdmin"));
		};
		$nosotros=new NosotrosModel;
		$data = array('nosotros'=>$nosotros->nosotrosA());

        	echo view('admin/header.php');
           	echo view('admin/menu.php');
           	echo view('admin/nosotros/nosotros.php',$data);
           	echo view('admin/footer.php');
	}
	public function viwagregar(){
			$nosotros=new NosotrosModel;
			$request=\Config\Services::request();

			$id=$request->getPostGet("id");
			$data=array("nosotros"=>$nosotros->taer($id));

			echo view('admin/header.php');
           	echo view('admin/menu.php');
           	echo view('admin/nosotros/form_nosotros.php',$data);
           	echo view('admin/footer.php');
        
	}
	public function registrar(){
		$nosotros=new NosotrosModel;
		$request=\Config\Services::request();

		$file = $this->request->getFile('files_documento');
		$id=$request->getPostGet("id");

		if (strlen($file)==0) {
				$data= array(
							'Historia'=> $request->getPostGet("Historia"),
							'Mision'=> $request->getPostGet("Mision"),	
							'Vision'=> $request->getPostGet("Vision"),	
							'Valores'=> $request->getPostGet("Valores")	
				);
				$registrar=$nosotros->editar($id,$data);
		}
		else{
				$name = $file->getRandomName();
				$file->move('./public/nosotros/img',$name);
				$data= array(
							'Nombre_Foto'=> $name,
							'Historia'=> $request->getPostGet("Historia"),
							'Mision'=> $request->getPostGet("Mision"),	
							'Vision'=> $request->getPostGet("Vision"),	
							'Valores'=> $request->getPostGet("Valores")	
				);
				$registrar=$nosotros->registrar($id,$data);
		}
		
		echo json_encode($registrar);
		
	}

}
