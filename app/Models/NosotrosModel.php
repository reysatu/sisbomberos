<?php namespace App\Models;

use CodeIgniter\Model;

class NosotrosModel extends Model{  
	public function nosotros(){
      $db=db_connect();
      $mostrar=$db->query('
                              SELECT    
                                  *
                              FROM  nosotros
                              ORDER BY Id desc
                              LIMIT 1
                              ') ;

        if(count($mostrar->getResult()) >0){ return $mostrar->getResult();}
        else{ return false;} 
      
  }
  public function nosotrosA(){
      $db=db_connect();
      $mostrar=$db->query('
                              SELECT    
                                  *
                              FROM  nosotros
                              ORDER BY Id desc
                              LIMIT 1
                              ') ;

        if(count($mostrar->getResult()) >0){ return $mostrar->getResult();}
        else{ return false;} 
      
  }
  public function taer($id){
      $db=db_connect();
      $mostrar=$db->query('
                              SELECT    
                                  *
                              FROM  nosotros
                              where  Id='.$id.'
                              ') ;

         return $mostrar->getResult();
  }
   public function editar($id,$data){
      $db=db_connect();
      $db->query('UPDATE  nosotros SET 

                Historia="'.$data["Historia"].'", 
                Mision="'.$data["Mision"].'",
                Vision="'.$data["Vision"].'",
                Valores="'.$data["Valores"].'"
                WHERE Id='.$id.'');
        return 2;
  }
  public function registrar($id,$data){
      $db=db_connect();
      $db->query('UPDATE  nosotros SET 
                Nombre_Foto="'.$data["Nombre_Foto"].'",
                Historia="'.$data["Historia"].'", 
                Mision="'.$data["Mision"].'",
                Vision="'.$data["Vision"].'",
                Valores="'.$data["Valores"].'"
                WHERE Id='.$id.'');
      return 2;
  }        
}