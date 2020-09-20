<?php namespace App\Models;

use CodeIgniter\Model;

class GaleriaModel extends Model{  

	public function galeria(){
      $db=db_connect();
      $mostrar=$db->query('
                              SELECT    
                                  *
                              FROM  galeria
                              WHERE Estado=1
                              ORDER BY Id desc
                              ') ;

        if(count($mostrar->getResult()) >0){ return $mostrar->getResult();}
        else{ return false;} 
      
  	}

}