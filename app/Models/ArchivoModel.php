<?php namespace App\Models;

use CodeIgniter\Model;

class ArchivoModel extends Model
{   

    protected $table      = 'archivo';
    protected $primaryKey = 'idarchivo';

    protected $returnType     = 'objet';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['descripcion','identificador','accion'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

 public function recogerid(){
      $db=db_connect();
      $id=$db->insertID();
      return $id;
    }
  public function getArchivoAdmin(){
     $db=db_connect();
        $query= $db->query('SELECT * from archivo where identificador is not null and deleted_at is null GROUP by identificador');
        $results =$query->getResult();
        return $results;
  }
  public function getGroup($identificador){
     $db=db_connect();
        $query= $db->query('SELECT * from archivo WHERE identificador="'.$identificador.'" and deleted_at is null');
        $results =$query->getResult();
        return $results;
  }
  public function getarchivoTot(){
     $db=db_connect();
       $query= $db->query('SELECT * from archivo where deleted_at is null');
        $results =$query->getResult();
        return $results;
  }
}