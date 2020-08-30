<?php namespace App\Controllers;

class Admin extends BaseController
{
	public function index()
	{
			
            echo view('admin/header.php');
           echo view('admin/menu.php');
           echo view('admin/content.php');
           echo view('admin/footer.php');
            
		
	}

	//--------------------------------------------------------------------

}
