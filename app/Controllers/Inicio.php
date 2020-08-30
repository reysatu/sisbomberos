<?php namespace App\Controllers;

class Inicio extends BaseController
{
	public function index()
	{
            echo view('main/layout/header.php');
            echo view('main/layout/content.php');
            echo view('main/layout/footer.php');
		
	}

	//--------------------------------------------------------------------

}
