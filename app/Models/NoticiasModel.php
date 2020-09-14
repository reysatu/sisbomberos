<?php namespace App\Models;

use CodeIgniter\Model;

class NoticiasModel extends Model
{   
    public function noticias($iniciar,$n_x_pagina){
       $db=db_connect();
      $mostrar=$db->query('
                              SELECT    
                                  *
                              FROM  Noticias
                              where  Estado=1 ORDER BY Fecha desc
                              LIMIT '.$iniciar.','.$n_x_pagina.'
                              ') ;

        if(count($mostrar->getResult()) >0){ return $mostrar->getResult();}
        else{ return false;} 
      
    }
    public function total_n(){
        $db=db_connect();
        $mostrar=$db->query('
                              SELECT    
                                   *
                              FROM  noticias 
                              where Estado=1
                              ');
       return count($mostrar->getResult());
    }
     public function detalle_noticia($idnoticia){
      $db=db_connect();
      $mostrar=$db->query('
                              SELECT    
                                  *
                              FROM  Noticias
                              where  Id='.$idnoticia.'
                              ') ;

        if(count($mostrar->getResult()) >0){ return $mostrar->getResult();}
        else{ return false;} 
      
    }
    public function ultimas_not(){
       $db=db_connect();
      $mostrar=$db->query('
                              SELECT    
                                  *
                              FROM  Noticias
                              where  Estado=1 ORDER BY Fecha desc
                              LIMIT 3
                              ') ;

        if(count($mostrar->getResult()) >0){ return $mostrar->getResult();}
        else{ return false;} 
      
    }
}