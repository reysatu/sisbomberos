<?php namespace App\Controllers;
use App\Models\ModuloModel;
class Modulo extends BaseController
{
	public function index()
	{ if(!isset($_SESSION['login'])){
				return redirect()->to(("LoginAdmin"));
			};
			$moduloModel=new ModuloModel;
			$data=array('modulo' => $moduloModel->BuscarModulo(),);
           echo view('admin/header.php');
           echo view('admin/menu.php');
           echo view('modulo/mod_content.php',$data);
           echo view('admin/footer.php');
	}

	public function viwagregar(){
		if(!isset($_SESSION['login'])){
				return redirect()->to(("LoginAdmin"));
			};
			$moduloModel=new ModuloModel;
			$request=\Config\Services::request();
			$id=$request->getPostGet("id");
			$result=$moduloModel->BusModulo($id);
			$Submodulos=$moduloModel->getSubModulos();
           	if (empty($id)){
           		$modulo="";
           		$SubmodulosSelec=[];
           		$idmodulo="";

           	}else{
           		$idmodulo=$result->idmodulo;
           		$modulo=$result->descripcion;
           		$SubmodulosSelec=$moduloModel->SubmodulosSelec($id);
           	}
           	$datosmodulo=array(	'idmodulo' =>$idmodulo,
           						'modulo' =>$modulo,
								'Submodulos'=>$Submodulos,
								'SubmodulosSelec'=>$SubmodulosSelec,);
			echo view('admin/header.php');
           	echo view('admin/menu.php');
          	echo view('modulo/for_modulo.php',$datosmodulo);
           	echo view('admin/footer.php');
	}
	public function add(){
			$moduloModel=new ModuloModel;
			$request=\Config\Services::request();
			$id=$request->getPost("idmodulo");
			$post_array=$request->getPost("submodulos");
			$data=array("modulo"=>$request->getPost("modulo"),
						"submodulos"=>$request->getPost("submodulos"),
						"idmodulo"=>$request->getPost("idmodulo"),);
			if($id==""){
				$data=array("descripcion"=>$request->getPost("modulo"),
							"padre"=>0,
							"orden"=>1,);
				$moduloModel->insert($data);
				$primary_key=$moduloModel->recogerid();
				$this->addSubModulos($post_array, $primary_key);
				$alert="<div class='card-body'><div class='alert alert-success' role='alert'>
        					El Registro se ingresó con ÉXITO
        				</div></div>";
        				$this->session->setFlashdata('alert', $alert);
				return redirect()->to(site_url("Modulo"));
			}else{
				$data2=array("descripcion"=>$request->getPost("modulo"),
							"padre"=>0,
							"orden"=>1,
							"idmodulo"=>intval($id));
				$moduloModel->save($data2);
				$moduloModel->delete_submodulos($id);
				$this->addSubModulos($post_array, intval($id));
				$alert="<div class='card-body'><div class='alert alert-success' role='alert'>
        					El Registro se ingresó con ÉXITO
        				</div></div>";
        				$this->session->setFlashdata('alert', $alert);
				return redirect()->to(site_url("Modulo"));
			}

			
	}
	//--------------------------------------------------------------------
	 protected function addSubModulos($post_array, $primary_key){
	 	$moduloModel=new ModuloModel;
			for ($i=0; $i <count($post_array); $i++){
				$data=array("padre"=>$primary_key,
							"idmodulo"=>$post_array[$i]);
				$moduloModel->save($data);
			}
	 }
	 public function delete(){
			$request=\Config\Services::request();
			$moduloModel=new ModuloModel;
			$id=$request->getPostGet("id");
			$moduloModel->delete($id);
			$moduloModel->delete_submodulos($id);

		}
}
