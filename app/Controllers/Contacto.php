<?php namespace App\Controllers;
use App\Models\InicioModel;
class Contacto extends BaseController
{ 
	public function index(){
		/*$inicio=new InicioModel;
		$data = array('slider'=>$inicio->slider(),'ultimas_not'=>$inicio->ultimas_not());*/
        echo view('main/layout/header.php');
        echo view('main/nav/contacto.php');
        echo view('main/layout/footer.php');
		
	}

	//--------------------------------------------------------------------
	public function enviar_correo(){
		
		$email = \Config\Services::email();
		$request=\Config\Services::request();
		$nombre=$request->getPostGet("nombre");
		$correo=$request->getPostGet("correo");
		$mensaje=$request->getPostGet("mensaje");
		$asunto=$request->getPostGet("asunto");
		$ms=$mensaje;
		$email->setFrom($correo, $nombre);
		$email->setTo("bomberos71web@gmail.com");
		$email->setSubject($asunto);
		$email->setMessage($ms);
		$email->send();
		$alert="<div class='card-body'><div class='alert alert-success' role='alert'>
        					Su Mensaje fue enviado , Pronto se comunicaran con Usted
        				</div></div>";
        $this->session->setFlashdata('alertCorreo', $alert);
				
		return redirect()->to(site_url("Contacto"));
	}
}
