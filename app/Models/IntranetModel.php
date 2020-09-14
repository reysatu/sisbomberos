<?php namespace App\Models;

use CodeIgniter\Model;

class IntranetModel extends Model
{   

    protected $table      = 'archivo';
    protected $primaryKey = 'idarchivo';

    protected $returnType     = 'objet';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['idarchivo','descripcion','identificador',"accion"];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;


    public function getUsuario(){
      $db=db_connect();
      $query= $db->query("select * from usuario INNER join perfil on perfil.idperfil =usuario.idperfil where perfil.descripcion='trabajador' and usuario.deleted_at is null");
        $results =$query->getResult();
        return $results;
    }
    public function getarchivos($inde){
      $db=db_connect();
      $query= $db->query("SELECT * from archivo WHERE identificador='".$inde."' and deleted_at is null");
        $results =$query->getResult();
        return $results;
    }

    public function getConvocados(){
      $db=db_connect();
      $query= $db->query("select * from usuario INNER join perfil on perfil.idperfil =usuario.idperfil where perfil.descripcion='Usuario' and usuario.deleted_at is null");
        $results =$query->getResult();
        return $results;
    }
  
}