<?php namespace App\Controllers;
use App\Models\InicioModel;
class Inicio extends BaseController
{ 
	public function index(){
		$inicio=new InicioModel;
		$data = array('slider'=>$inicio->slider(),'ultimas_not'=>$inicio->ultimas_not());
        echo view('main/layout/header.php');
        echo view('main/layout/content.php',$data);
        echo view('main/layout/footer.php');
		
	}

	//--------------------------------------------------------------------

}
