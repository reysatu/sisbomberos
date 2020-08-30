<?php namespace App\Controllers;

class Noticias extends BaseController
{
	public function index()
	{
			
            echo view('main/layout/header.php');
            echo view('main/nav/noticias.php');
            echo view('main/layout/footer.php');
            
		
	}

	//--------------------------------------------------------------------

}
