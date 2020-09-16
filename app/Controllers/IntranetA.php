<?php namespace App\Controllers;
use App\Models\IntranetModel;
use App\Models\detalleArchivoModel;
use App\Models\ArchivoModel;
class IntranetA extends BaseController
{	
	public function __construct(){
		
	}
	public function index()
	{ if(!isset($_SESSION['login'])){ 
				return redirect()->to(("LoginAdmin"));
			};
			$ArchivoModel=new ArchivoModel;
			$data=array('archivo' => $ArchivoModel->getArchivoAdmin(),);
           echo view('admin/header.php');
           echo view('admin/menu.php');
           echo view('intranetAD/content.php',$data);
           echo view('admin/footer.php');
	}
	public function viwagregar(){
				helper("date");
				$IntranetModel=new IntranetModel;
				//$request=\Config\Services::request();
				//$id=$request->getPostGet("id");
				$indicador=now();
				$data=array('trabajadores' =>$IntranetModel->getUsuario(),
							'indicador'=>$indicador);
		 		echo view('admin/header.php');
           		echo view('admin/menu.php');
          		echo view('intranetAD/form_intra.php',$data);
           		echo view('admin/footer.php');

			
        
	}
	public function add(){
		$detalleArchivoModel=new detalleArchivoModel;
		$IntranetModel=new IntranetModel;
		$request=\Config\Services::request();
		$valor = 1;
		$a=$request->getPostGet("rd");
		$nombre=$request->getPostGet("name");
		$tken=$request->getPostGet("tken");
		$trabajador=$request->getPostGet("trabajador");
		$tot=$request->getPostGet("checkArchivo");
		$Convo=$request->getPostGet("checkConvo");
		echo($tot);
		
		if(isset($a)){ 
			  $valor = 2;
			}
		if($valor==1){
			$imagefile = $this->request->getFiles();
			if(!empty($imagefile)){
				$img = $imagefile['file'];
				$nom= $img->getName();
				$tken=$request->getPostGet("tken");
				$data=array("descripcion"=>$nom,
						"identificador"=>$tken,);
				$IntranetModel->insert($data);
				$img->move('./public/archivos');
				exit;
			}
			
		}	
		if ($valor==2){

			$filename = './public/archivos/'.$nombre;  
  			unlink($filename); 
			$IntranetModel->where('descripcion', $nombre)->delete();
  			exit;
		}
		if($trabajador){
			if(!$tot){
				$archivos=$IntranetModel->getarchivos($tken);
			$IntranetModel->where("identificador", $tken)->set(['accion' => 2])->update();
			for ($i=0; $i <count($trabajador); $i++){
				foreach ($archivos as $field){
				 $data=array("idarchivo"=>$field->idarchivo,
							"idusuario"=>$trabajador[$i]);
					  $detalleArchivoModel->insert($data);
				}
			}
			$alert="<div class='card-body'><div class='alert alert-success' role='alert'>
        					Los archivos se enviaron con ÉXITO
        				</div></div>";
        				$this->session->setFlashdata('alert', $alert);
			}
			
			
		}
		if ($tot) {
			echo("ss");
			$archivos=$IntranetModel->getarchivos($tken);
			$usuarios=$IntranetModel->getUsuario();
			
			$IntranetModel->where("identificador", $tken)->set(['accion' => 2])->update();
			foreach ($usuarios as $value) {
				foreach ($archivos as $field){
					$data=array("idarchivo"=>$field->idarchivo,
								"idusuario"=>$value->idusuario,);
					  $detalleArchivoModel->insert($data);

				}	
			}
			$alert="<div class='card-body'><div class='alert alert-success' role='alert'>
        					Los archivos se enviaron con ÉXITO
        				</div></div>";
        				$this->session->setFlashdata('alert', $alert);
			
			
		}
		if ($Convo){
			$archivos=$IntranetModel->getarchivos($tken);
			$usuarios=$IntranetModel->getConvocados();
			
			$IntranetModel->where("identificador", $tken)->set(['accion' => 2])->update();
			foreach ($usuarios as $value) {
				foreach ($archivos as $field){
					$data=array("idarchivo"=>$field->idarchivo,
								"idusuario"=>$value->idusuario,);
					  $detalleArchivoModel->insert($data);

				}	
			}
			$alert="<div class='card-body'><div class='alert alert-success' role='alert'>
        					Los archivos se enviaron con ÉXITO
        				</div></div>";
        				$this->session->setFlashdata('alert', $alert);
			
		}

	}

	//--------------------------------------------------------------------
	public function verGroup(){
		$ArchivoModel=new ArchivoModel;
		$request=\Config\Services::request();
		$identificador=$request->getPostGet("inde");
		$archivos=$ArchivoModel->getGroup($identificador);
		echo json_encode($archivos);
	}
	public function deleteGroup(){
		$ArchivoModel=new ArchivoModel;
		$detalleArchivoModel=new detalleArchivoModel;
		$request= \Config\Services::request();
		$identificador=$request->getPostGet("identificador");
		$archivos=$ArchivoModel->getGroup($identificador);
		foreach ($archivos as $field)
			{	
         		$idarchivo=$field->idarchivo;
         		$descripcion=$field->descripcion;
      			$detalleArchivoModel->where('idarchivo', $idarchivo)->delete();
      			$ArchivoModel->delete($idarchivo);
      			$filename = './public/archivos/'.$descripcion;  
  				unlink($filename); 
			}
		
	}
	
}
