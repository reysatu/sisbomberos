<?php namespace App\Controllers;
use App\Models\InicioModel;
class SliderA extends BaseController
{ 
	public function index(){
		if(!isset($_SESSION['login'])){ 
				return redirect()->to(("LoginAdmin"));
			};
		$inicio=new InicioModel;
		$data = array('slider'=>$inicio->sliderA());

        	echo view('admin/header.php');
           	echo view('admin/menu.php');
           	echo view('admin/slider/slider.php',$data);
           	echo view('admin/footer.php');
	}
	public function viwagregar(){
			$inicio=new InicioModel;
			$request=\Config\Services::request();

			if (!$request->getPostGet("id")){
					$id=""; 
					$titulo="";
					$descripcion="";
					$img="";
			}
			else{
				$id=$request->getPostGet("id");
				$taer=$inicio->taer($id);
					$id=$taer->Id; 
					$titulo=$taer->Titulo;
					$descripcion=$taer->Descripcion; 
					$img=$taer->Nombre_Foto; 
			}
			$data=array("id"=>$id,"titulo"=>$titulo,"descripcion"=>$descripcion,"img"=>$img);

				echo view('admin/header.php');
           		echo view('admin/menu.php');
          		echo view('admin/slider/form_slider.php',$data);
           		echo view('admin/footer.php');
        
	}
	public function registrar(){
		$inicio=new InicioModel;
		$request=\Config\Services::request();
		$db = \Config\Database::connect();
		$builder = $db->table('slider');

		$file = $this->request->getFile('files_documento');
		$name = $file->getRandomName();
		$id=$request->getPostGet("id");
		$data= array(
						'Id'=> $id,
						'Nombre_Foto'=> $name,
						'Titulo'=> $request->getPostGet("titulo"),
						'Descripcion'=> $request->getPostGet("descripcion"),
						'Boton'=> "Registrar",
						'Ling'=> '#',
						'Fecha_Registro'=>date("Y-m-d"),
						'Estado'=>"1"
		);
		$registrar=$inicio->registrar($id,$data);

		if ($registrar==1) {
			$builder->insert($data);
			$file->move('./public\inicio\img\slider',$name);
		}
		echo json_encode($registrar);
	}

	public function activar_eliminar(){
		$request=\Config\Services::request();
		$inicio=new InicioModel;
		$id=$request->getPostGet('id');
		$op=$request->getPostGet('op');
		$datos=$inicio->activar_eliminar($id,$op);
		echo json_encode($datos);
	}

}
