<?php namespace App\Controllers;
use App\Models\NosotrosModel;
class Nosotros extends BaseController
{ 
	public function index(){
	$nosotros=new NosotrosModel;
	$data = array('nosotros'=>$nosotros->nosotros());
			
        echo view('main/layout/header.php');
        echo view('main/nav/nosotros.php',$data);
        echo view('main/layout/footer.php');
            
		
	}

}
