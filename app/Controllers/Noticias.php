<?php namespace App\Controllers;
use App\Models\NoticiasModel;
class Noticias extends BaseController
{
	public function index(){
		if (!$_GET) {
     		
     		return redirect()->to('Noticias?pagina=1');
  		}
  		else{
  			$noticias=new NoticiasModel;
  			$request=\Config\Services::request();

			$total_n=$noticias->total_n();
			$n_x_pagina=6;
			$pagina=$_REQUEST['pagina'];
			$iniciar=($pagina-1)*$n_x_pagina;
			
			$data = array('n_x_pagina'=>$n_x_pagina,'total_n'=>$total_n,'noticias'=>$noticias->noticias($iniciar,$n_x_pagina));

            echo view('main/layout/header.php');
            echo view('main/nav/noticias.php',$data);
            echo view('main/layout/footer.php');
        }
		
	} 

}
