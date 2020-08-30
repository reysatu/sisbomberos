<?php namespace App\Controllers;

class Nosotros extends BaseController
{
	public function index()
	{
			
            echo view('main/layout/header.php');
            echo view('main/nav/nosotros.php');
            echo view('main/layout/footer.php');
            
		
	}

	//--------------------------------------------------------------------

}
