<?php namespace App\Models;

use CodeIgniter\Model;

class NoticiasModel extends Model
{   

    protected $table      = 'noticias';
    protected $primaryKey = 'id';

    protected $returnType     = 'objet';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['Titulo','Descripcion','Nombre_Foto','Fecha','Fecha_Registro'];

   protected $useTimestamps = true;
   protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

     public function noticias($iniciar,$n_x_pagina){
       $db=db_connect();
      $mostrar=$db->query('
                              SELECT    
                                  *
                              FROM  Noticias
                              where deleted_at is null ORDER BY Fecha desc
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
                              where deleted_at is null
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
                              where  deleted_at is null ORDER BY Fecha desc
                              LIMIT 3
                              ') ;

        if(count($mostrar->getResult()) >0){ return $mostrar->getResult();}
        else{ return false;} 
      
    }
}