<?php namespace App\Models;

use CodeIgniter\Model;

class InicioModel extends Model{

	public function ultimas_not(){
       $db=db_connect();
      $mostrar=$db->query('
                              SELECT    
                                  *
                              FROM  Noticias
                              where  Estado=1 ORDER BY Fecha desc
                              LIMIT 5
                              ') ;

        if(count($mostrar->getResult()) >0){ return $mostrar->getResult();}
        else{ return false;} 
      
  }
  public function slider(){
       $db=db_connect();
      $mostrar=$db->query('
                              SELECT    
                                  *
                              FROM  slider
                              where  Estado=1 ORDER BY Id desc
                              LIMIT 4
                              ') ;

        if(count($mostrar->getResult()) >0){ return $mostrar->getResult();}
        else{ return false;} 
      
  }   


}