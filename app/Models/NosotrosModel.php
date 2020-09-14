<?php namespace App\Models;

use CodeIgniter\Model;

class NosotrosModel extends Model{  
	public function nosotros(){
      $db=db_connect();
      $mostrar=$db->query('
                              SELECT    
                                  *
                              FROM  nosotros
                              where  Estado=1 ORDER BY Id desc
                              LIMIT 1
                              ') ;

        if(count($mostrar->getResult()) >0){ return $mostrar->getResult();}
        else{ return false;} 
      
  }   
}