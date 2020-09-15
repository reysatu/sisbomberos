<?php namespace App\Controllers;
use App\Models\InicioModel;
class AdminNoticia extends BaseController
{ 
	public function index(){
		
       echo view('admin/header.php');
           echo view('admin/menu.php');
           echo view('noticia/actu_content.php');
           echo view('admin/footer.php');
            
		
	}

	//--------------------------------------------------------------------

}
