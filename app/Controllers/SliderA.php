<?php namespace App\Controllers;
use App\Models\InicioModel;
class SliderA extends BaseController
{ 
	public function index(){
		if(!isset($_SESSION['login'])){
				return redirect()->to(("LoginAdmin"));
			};
		$inicio=new InicioModel;
		$data = array('slider'=>$inicio->slider());

        	echo view('admin/header.php');
           	echo view('admin/menu.php');
           	echo view('admin/slider.php',$data);
           	echo view('admin/footer.php');
	}

	//--------------------------------------------------------------------

}
