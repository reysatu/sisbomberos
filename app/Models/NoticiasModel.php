<?php namespace App\Models;

use CodeIgniter\Model;

class NoticiasModel extends Model
{   

    protected $table      = 'noticias';
    protected $primaryKey = 'Id';

    protected $returnType     = 'objet';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['Titulo','Descripcion','Nombre_Foto','Fecha','N_Principal','Fecha_Registro'];

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

                             
                              where  deleted_at is null and N_Principal=0 ORDER BY Id DESC

                              LIMIT '.$iniciar.','.$n_x_pagina.'
                              ') ;

        if(count($mostrar->getResult()) >0){ return $mostrar->getResult();}
        else{ return false;} 
      
    }
    public function noticias_p(){
       $db=db_connect();
      $mostrar=$db->query(' 
                              SELECT    
                                  *
                              FROM  Noticias
                              where  deleted_at is null and N_Principal=1 ORDER BY created_at DESC
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

                              where deleted_at is null and N_Principal=0

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

                              where  deleted_at is null and N_Principal=0  ORDER BY Id DESC

                              LIMIT 3
                              ') ;

        if(count($mostrar->getResult()) >0){ return $mostrar->getResult();}
        else{ return false;} 
      
    }
    public function GetNoticias(){
      $db=db_connect();
      $query= $db->query('select * from noticias where deleted_at is null');
        $results =$query->getResult();
       return $results;
    }
    public function getNoticiaId($id){
       $db=db_connect();
      $query= $db->query('select * from noticias where deleted_at is null and Id="'.$id.'"');
        return $row = $query->getRow();
    }
    public function updateInsert(){
      $db=db_connect();
      $query= $db->query('UPDATE noticias SET N_Principal = 0 WHERE N_Principal = 1 and deleted_at is null Order by created_at asc limit 1');
       $results =$query->getResult();
       return $results;
    }
    public function updateSiguiente(){
       $db=db_connect();
      $query= $db->query('UPDATE noticias SET N_Principal = 1 WHERE deleted_at is null and N_Principal=0 Order by Id DESC limit 1');
       $results =$query->getResult();
       return $results;
    }
    public function countNoticia(){
      $db=db_connect();
      $query= $db->query('SELECT count(Id)  as cant FROM noticias where deleted_at is null');
        return $row = $query->getRow();
    }

}