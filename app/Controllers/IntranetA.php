<?php namespace App\Controllers;
use App\Models\IntranetModel;
use App\Models\detalleArchivoModel;
class IntranetA extends BaseController
{	
	public function __construct(){
		
	}
	public function index()
	{ if(!isset($_SESSION['login'])){
				return redirect()->to(("LoginAdmin"));
			};
			
           echo view('admin/header.php');
           echo view('admin/menu.php');
           echo view('intranetAD/content.php');
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
						"identificador"=>$tken);
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
			$archivos=$IntranetModel->getarchivos($tken);
			for ($i=0; $i <count($trabajador); $i++){
				foreach ($archivos as $field){
				 $data=array("idarchivo"=>$field->idarchivo,
							"idusuario"=>$trabajador[$i]);
					  $detalleArchivoModel->insert($data);
				}
			}
		}
	}

	//--------------------------------------------------------------------
	
	
}
