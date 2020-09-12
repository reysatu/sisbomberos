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
			$data=array("archivos"=>$ArchivoModel->getarchivoTot());
           echo view('admin/header.php');
           echo view('admin/menu.php');
           echo view('Archivo/content.php',$data);
           echo view('admin/footer.php');
            
		
	}

	//--------------------------------------------------------------------

}
