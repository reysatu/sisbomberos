<?php namespace App\Controllers;
use App\Models\ArchivoModel;
use App\Models\detalleArchivoModel;

class Intranet extends BaseController
{
	public function index()
	{
			if(!isset($_SESSION['loginint'])){
				return redirect()->to(("LoginIntranet"));
			};
           echo view('intranet/header.php');
           echo view('intranet/content.php');
           echo view('intranet/footer.php');
           
            
		
	}

	//--------------------------------------------------------------------
	public function archivo()
	{	$session = \Config\Services::session();	
		$detalleArchivoModel=new detalleArchivoModel;
			//$request=\Config\Services::request();
			//$data=array(""=>)

			//$id=$request->getPostGet("id");
			
			if(!isset($_SESSION['loginint'])){
				return redirect()->to(("LoginIntranet"));
			};
			$idusuario=$session->get('idusuarioint');
			
			$datos=array("archivo"=>$detalleArchivoModel->getArchivo($idusuario));
           echo view('intranet/header.php');
           echo view('intranet/view_archivo.php',$datos);
           echo view('intranet/footer.php');
           
            
		
	}
	public function subir(){
		$session = \Config\Services::session();	
		$idusuario=$session->get('idusuarioint');
		$detalleArchivoModel=new detalleArchivoModel;
			//$request=\Config\Services::request();
			//$data=array(""=>)

			//$id=$request->getPostGet("id");
			
			if(!isset($_SESSION['loginint'])){
				return redirect()->to(("LoginIntranet"));
			};
			//$idusuario=$session->get('idusuarioint');
			
			$datos=array("archivoEnviado"=>$detalleArchivoModel->getArchivoEnviado($idusuario));
           echo view('intranet/header.php');
           echo view('intranet/subir.php',$datos);
           echo view('intranet/footer.php');
           
	}
	public function add(){
		$session = \Config\Services::session();	
		$detalleArchivoModel=new detalleArchivoModel;
		$ArchivoModel=new ArchivoModel;
		
		$request=\Config\Services::request();
		$valor = 1;
		$idusuario=$session->get('idusuarioint');
		$nombre=$request->getPostGet("name");
		$trabajador=$request->getPostGet("trabajador");
		$a=$request->getPostGet("rd");
		if(isset($a)){ 
			  $valor = 2;
			}
		if($valor==1){
			$imagefile = $this->request->getFiles();
			if(!empty($imagefile)){
				$img = $imagefile['file'];
				$nom= $img->getName();
				$img->move('./public/archivos');
				$data=array("descripcion"=>$nom,"accion"=>1,);
				$ArchivoModel->insert($data);
				$primary_key=$ArchivoModel->recogerid();
				$data2=array('idarchivo' => $primary_key,
							 'idusuario'=>$idusuario,
							 );//1 usuario envia
				$detalleArchivoModel->insert($data2);
				exit;
			}
			
		}	
		if ($valor==2){
			$filename = './public/archivos/'.$nombre;  
  			unlink($filename); 
  			$ArchivoModel->where('descripcion', $nombre)->delete();
			$detalleArchivoModel->eliminar($nombre);
  			exit;
		}
		
	}
	public function delete(){
		
		$detalleArchivoModel=new detalleArchivoModel;
		$ArchivoModel=new ArchivoModel;
		$request= \Config\Services::request();
		$descripcion=$request->getPostGet("descripcion");
		$filename = './public/archivos/'.$descripcion; 
		unlink($filename); 
		$ArchivoModel->where('descripcion', $descripcion)->delete();
		$detalleArchivoModel->eliminar($descripcion);
	}
}
