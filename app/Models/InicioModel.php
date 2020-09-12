<?php namespace App\Models;

use CodeIgniter\Model;

class InicioModel extends Model{

	public function ultimas_not(){
       $db=db_connect();
      $mostrar=$db->query('
                              SELECT    
                                  *
                              FROM  Noticias
                              where  Estado=1 ORDER BY Fecha
                              LIMIT 5
                              ') ;

        if(count($mostrar->getResult()) >0){ return $mostrar->getResult();}
        else{ return false;} 
      
    }   

}