<?php namespace App\Models;

use CodeIgniter\Model;

class GaleriaModel extends Model{  

	public function total_g(){
        $db=db_connect();
        $mostrar=$db->query('
                              SELECT    
                                   *
                              FROM  galeria 
                              where Estado=1 
                              ');
       return count($mostrar->getResult());
  }
  public function galeria($iniciar,$n_x_pagina){
      $db=db_connect();
      $mostrar=$db->query('
                              SELECT    
                                  *
                              FROM  galeria
                              WHERE Estado=1
                              ORDER BY Id desc
                              LIMIT '.$iniciar.','.$n_x_pagina.'
                              ') ;

        if(count($mostrar->getResult()) >0){ return $mostrar->getResult();}
        else{ return false;} 
      
  	}

}