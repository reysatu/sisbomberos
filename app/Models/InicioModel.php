<?php namespace App\Models;

use CodeIgniter\Model;

class InicioModel extends Model{

	public function ultimas_not(){ 
       $db=db_connect();
      $mostrar=$db->query('
                              SELECT    
                                  *
                              FROM  Noticias
                              where  deleted_at is null ORDER BY Fecha desc
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
  public function taer($id){
      $db=db_connect();
      $mostrar=$db->query('
                              SELECT    
                                  *
                              FROM  slider
                              where  Id='.$id.'
                              ') ;

         return $mostrar->getRow();
  }  
  public function sliderA(){
      $db=db_connect();
      $mostrar=$db->query('
                              SELECT    
                                  *
                              FROM  slider
                              ORDER BY Id desc
                              ') ;

        if(count($mostrar->getResult()) >0){ return $mostrar->getResult();}
        else{ return false;} 
      
  }
    public function editar($id,$data){
      $db=db_connect();
      $db->query('UPDATE  slider SET 

                Titulo="'.$data["Titulo"].'", 
                Descripcion="'.$data["Descripcion"].'"
                WHERE Id='.$id.'');
        return 2;
    } 
  public function registrar($id,$data){
      $db=db_connect();
      if ($id!="") {
        $db->query('UPDATE  slider SET 
                Nombre_Foto="'.$data["Nombre_Foto"].'",
                Titulo="'.$data["Titulo"].'", 
                Descripcion="'.$data["Descripcion"].'"
                WHERE Id='.$id.'');
        return 2;
      }
      else{
        $resul=$db->query('SELECT * FROM slider WHERE Titulo="'.$data["Titulo"].'" and Descripcion="'.$data["Descripcion"].'"');
        if (count($resul->getResult())  >=1) {
          return 3;
        }
        else{
          return 1;
        }
      }
    }   
  public function activar_eliminar($id,$op){
      $db=db_connect();
      if($op=="eliminar"){
          $mostrar=$db->query('UPDATE  slider SET Estado=0 WHERE Id='.$id.'');
          return "eliminado";
      }
      else{ 
          $mostrar=$db->query('UPDATE  slider SET Estado=1 WHERE Id='.$id.'');
          return "activado";
      } 
      
  }

}