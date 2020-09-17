<?php namespace App\Controllers;
use App\Models\PerfilModel;
use App\Models\PermisosModel;

class Perfil extends BaseController
{
	public function index()
	{	
		if(!isset($_SESSION['login'])){
				return redirect()->to(("LoginAdmin"));
			};
		$PerfilModel=new PerfilModel;
		$data=array('perfil' => $PerfilModel->BuscarPerfil(),);
           echo view('admin/header.php');
           echo view('admin/menu.php');
           echo view('perfil/p_content.php',$data);
           echo view('admin/footer.php');
            
	}
	public function viwagregar(){
		if(!isset($_SESSION['login'])){
				return redirect()->to(("LoginAdmin"));
			};
			$PerfilModel=new PerfilModel;
			$request=\Config\Services::request();
			$id=$request->getPostGet("id");

           	$results=$PerfilModel->BusPerfil($id);
           	$resul=$PerfilModel->BusPerfilName($id);
           	
           	if (empty($results)){
           		$modulos=$PerfilModel->getModulos();
				$perfil="";
				$modulosselec=[];
				$idperfil="";
           	}else{
           		$descripcion=$resul->perfil;
           		$idperfil=$resul->idperfil;
           		$modulos=$PerfilModel->getModulos();
				$perfil=$descripcion;
				$modulosselec=$PerfilModel->BusPerfil($id);
           	}
           
           	$datosperfil=array('modulos' =>$modulos, 
           						'perfil' =>$perfil,
           						'idperfil'=>$idperfil,
           						'modulosselec'=>$modulosselec,);
		 		echo view('admin/header.php');
           		echo view('admin/menu.php');
          		echo view('perfil/form_perfil.php',$datosperfil);
           		echo view('admin/footer.php');

			
        
	}
		public function add(){
			$PerfilModel=new PerfilModel;
			$PermisosModel=new PermisosModel;
			$request= \Config\Services::request();
			$id=$request->getPost("idperfil");
			$post_array=$request->getPost("modulos");
			$data=array("perfil"=>$request->getPost("perfil"),
						"modulos"=>$request->getPost("modulos"),
						"idperfil"=>$request->getPost("idperfil"),);
			if($id==""){
				/**/$data=array("descripcion"=>$request->getPost("perfil"),);
				$PerfilModel->insert($data);
				$primary_key=$PerfilModel->recogerid();
				$this->addpermisos($post_array, $primary_key);
				$alert="<div class='card-body'><div class='alert alert-success' role='alert'>
        					El Registro se ingresó con ÉXITO
        				</div></div>";
        				$this->session->setFlashdata('alert', $alert);
				return redirect()->to(site_url("Perfil"));
			}else{
				/**/
				$data2=array("descripcion"=>$request->getPost("perfil"),
							"idperfil"=>intval($id),);
				$PerfilModel->save($data2);

				$PermisosModel->where('idperfil',$id)->delete();
				$this->addpermisos($post_array, intval($id));
				$alert="<div class='card-body'><div class='alert alert-success' role='alert'>
        					El Registro se ingresó con ÉXITO
        				</div></div>";
        				$this->session->setFlashdata('alert', $alert);
				return redirect()->to(site_url("Perfil"));
			}
		}

		protected function addpermisos($post_array, $primary_key){
			$PermisosModel=new PermisosModel;
			for ($i=0; $i <count($post_array); $i++){
				$data=array("idperfil"=>$primary_key,
							"idmodulo"=>$post_array[$i]);
				$PermisosModel->insert($data);

			}
		}
		public function delete(){
			$request=\Config\Services::request();
			$PerfilModel=new PerfilModel;
			$PermisosModel=new PermisosModel;
			$id=$request->getPostGet("id");
			$PerfilModel->delete($id);
			$PermisosModel->where('idperfil',$id)->delete();

		}




}
