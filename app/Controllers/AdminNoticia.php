<?php namespace App\Controllers;
use App\Models\NoticiasModel;
class AdminNoticia extends BaseController
{ 
	public function index(){
			if(!isset($_SESSION['login'])){
				return redirect()->to(("LoginAdmin"));
			};
			$NoticiasModel=new NoticiasModel;
			$data = array('noticia'=>$NoticiasModel->GetNoticias());
       		echo view('admin/header.php');
           	echo view('admin/menu.php');
           	echo view('noticia/actu_content.php',$data);
           	echo view('admin/footer.php');
            
		
	}
	public function viwagregar(){
			if(!isset($_SESSION['login'])){
				return redirect()->to(("LoginAdmin"));
			};
			$NoticiasModel=new NoticiasModel;
			$request=\Config\Services::request();
			// //$data=array(""=>)
			$id=$request->getPostGet("Id");
			
			
			$results=$NoticiasModel->getNoticiaId($id);
			if (empty($results)){
					$Id="";
					$Titulo="";
					$Descripcion="";
					$Nombre_Foto="";
					$Fecha="";
					$tipe="required";
					$check="";
			}else{
					$check=$results->N_Principal;
					if($check==1){
						$check="checked";
					}else{
						$check="";					}
					$Id=$results->Id;
					$Titulo=$results->Titulo;
					$Descripcion=$results->Descripcion;
					$Nombre_Foto=$results->Nombre_Foto;
					$Fecha=$results->Fecha;
					$tipe="";
			};
			$datosNoticia=array("Id"=>$Id,"Titulo"=>$Titulo,"Descripcion"=>$Descripcion,
								"Nombre_Foto"=>$Nombre_Foto,"Fecha"=>$Fecha,'tipe'=>$tipe,'check'=>$check);
		 		echo view('admin/header.php');
           		echo view('admin/menu.php');
          		echo view('noticia/for_noticias.php',$datosNoticia);
           		echo view('admin/footer.php');
	}

	//--------------------------------------------------------------------
	public function add(){
			
			$NoticiasModel=new NoticiasModel;
			$request= \Config\Services::request();
			$id=$request->getPost("idnoticia");
			$N_Principal=$request->getPost("Principal");
			if(empty($N_Principal)){
				$N_Principal=0;
			}else{
				$N_Principal=1;
			}
			$data=array("Titulo"=>$request->getPost("titulo"),
						"Descripcion"=>$request->getPost("parrafo"),
						"id"=>$request->getPost("idnoticia"),
						"Fecha"=>$request->getPost("fecha"),
						
						);

			if($id==""){
				
			$imagefile = $this->request->getFile('imagen');
			$name=$imagefile->getRandomName();
			$data['Nombre_Foto'] = $name;
			$data['N_Principal'] = 1;
			$imagefile->move('./public/img/noticia',$name);
			$valida=$NoticiasModel->getNoticiaId($id);
			
			$NoticiasModel->updateInsert();
			// $NoticiasModel->where('N_Principal','1')->orderBy('Id','ASC')->limit(1)->set(['N_Principal' => 0])->update();
			$NoticiasModel->insert($data);
			
				//$vista=view().view().view().view().view().view()
				$alert="<div class='card-body'><div class='alert alert-success' role='alert'>
        				El Registro se ingresó con ÉXITO
        				</div></div>";
        				$this->session->setFlashdata('alert', $alert);
				return redirect()->to(site_url("AdminNoticia"));
			}else{
					$valida=$NoticiasModel->getNoticiaId($id);
					$tipo=$valida->N_Principal;
					if($tipo==0 && $N_Principal==1){
						$data['N_Principal'] = 1;
						$NoticiasModel->updateInsert();
					}
					if($N_Principal==0 && $tipo==1){
						$data['N_Principal'] = 0;
						$cambio=$NoticiasModel->updateSiguiente();
					}
					$imagefile = $this->request->getFile('imagen');
					$name=$imagefile->getName();
					if($name!=""){
						$name=$imagefile->getRandomName();
						$data['Nombre_Foto'] = $name;
						$imagefile->move('./public/img/noticia',$name);
					}
					$NoticiasModel->update($id,$data);
					
					$alert="<div class='card-body'><div class='alert alert-success' role='alert'>
        					El Registro se ingresó con ÉXITO
        				</div></div>";
        				$this->session->setFlashdata('alert', $alert);

					return redirect()->to(site_url("AdminNoticia"));
				

				
			}
			
	}

	public function delete(){
		$NoticiasModel=new NoticiasModel;
		$request= \Config\Services::request();
		$id=$request->getPostGet("id");
		$descripcion=$request->getPostGet("descripcion");
		$valida=$NoticiasModel->getNoticiaId($id);
		$tipo=$valida->N_Principal;
		$cantidad=$NoticiasModel->countNoticia();
		$cantidad=$cantidad->cant;
		if($cantidad>3){
			if($tipo==1){
			$cambio=$NoticiasModel->updateSiguiente();
		}
		$NoticiasModel->delete($id);
		$filename = './public/img/noticia/'.$descripcion; 
		unlink($filename); 
	}else{
		echo("1");
	}
		
		
	}
}
