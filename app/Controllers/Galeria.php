<?php namespace App\Controllers;
use App\Models\GaleriaModel;
class Galeria extends BaseController
{  
	public function index(){
	if (!$_GET) {
     		return redirect()->to('Galeria?pagina=1');
  	}
  	else{
  		$galeria=new GaleriaModel;
  		$request=\Config\Services::request();
		$total_n=$galeria->total_g();
		$n_x_pagina=3; 
		$pagina=$_REQUEST['pagina'];
		$iniciar=($pagina-1)*$n_x_pagina;

		$data = array('n_x_pagina'=>$n_x_pagina,'total_n'=>$total_n,'galeria'=>$galeria->galeria($iniciar,$n_x_pagina));
				
	        echo view('main/layout/header.php');
	        echo view('main/nav/galeria.php',$data);
	        echo view('main/layout/footer.php');
	}
		
	}

	//--------------------------------------------------------------------

}
