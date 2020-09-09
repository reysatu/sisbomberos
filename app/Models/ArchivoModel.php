<?php namespace App\Models;

use CodeIgniter\Model;

class ArchivoModel extends Model
{   

    protected $table      = 'archivo';
    protected $primaryKey = 'idarchivo';

    protected $returnType     = 'objet';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['descripcion','identificador'];

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
  
}