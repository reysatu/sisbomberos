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
                              where  Estado=1 ORDER BY Id asc
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
}