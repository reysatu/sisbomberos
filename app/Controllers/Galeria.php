<?php namespace App\Controllers;
use App\Models\GaleriaModel;
class Galeria extends BaseController
{ 
	public function index(){
	$galeria=new GaleriaModel;
	$data = array('galeria'=>$galeria->galeria());
			
        echo view('main/layout/header.php');
        echo view('main/nav/galeria.php',$data);
        echo view('main/layout/footer.php');
            
		
	}

	//--------------------------------------------------------------------

}
