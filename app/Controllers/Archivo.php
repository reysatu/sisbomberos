<?php namespace App\Controllers;
use App\Models\detalleArchivoModel;
use App\Models\ArchivoModel;
class Archivo extends BaseController
{
	public function index()
	{		
		if(!isset($_SESSION['login'])){
				return redirect()->to(("LoginAdmin"));
			};
					$ArchivoModel=new ArchivoModel;
			$data=array("archivos"=>$ArchivoModel->getarchivoRecibido());
           echo view('admin/header.php');
           echo view('admin/menu.php');
           echo view('Archivo/content.php',$data);
           echo view('admin/footer.php');
            
		
	}
	public function delete(){
		$ArchivoModel=new ArchivoModel;
		$detalleArchivoModel=new detalleArchivoModel;
		$request= \Config\Services::request();
		$idarchivo=$request->getPostGet("id");
		$descripcion=$request->getPostGet("descripcion");
		$filename = './public/archivos/'.$descripcion; 
		unlink($filename); 
		$ArchivoModel->delete($idarchivo);
		$detalleArchivoModel->where('idarchivo', $idarchivo)->delete();
		
	
	}

	//--------------------------------------------------------------------

}
