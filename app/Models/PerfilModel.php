<?php namespace App\Models;

use CodeIgniter\Model;

class PerfilModel extends Model
{   
    protected $table      = 'perfil';
    protected $primaryKey = 'idperfil';

    protected $returnType     = 'objet';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['idperfil','descripcion'];

   protected $useTimestamps = true;
   protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
    public function BuscarPerfil(){
       $db=db_connect();
        $query= $db->query('SELECT `perfil`.*, (SELECT GROUP_CONCAT(DISTINCT modulo.descripcion) FROM modulo LEFT JOIN permiso ON permiso.idmodulo = modulo.idmodulo WHERE permiso.idperfil = `perfil`.idperfil and modulo.deleted_at is null and modulo.orden=1 GROUP BY permiso.idperfil) AS modulos FROM perfil where deleted_at is null');
        $results =$query->getResult();
       return $results;
    }
    public function getModulos(){
       $db=db_connect();
      $query= $db->query('SELECT * FROM modulo where orden="1" and deleted_at is null');
        $results =$query->getResult();
       return $results;
    }
    /*public function BusPerfil($id){
       $db=db_connect();
      $query= $db->query('SELECT `perfil`.*, (SELECT GROUP_CONCAT(DISTINCT modulo.descripcion) FROM modulo LEFT JOIN permiso ON permiso.idmodulo = modulo.idmodulo WHERE permiso.idperfil = `perfil`.idperfil and modulo.deleted_at is null and modulo.orden=1 GROUP BY permiso.idperfil) AS modulo FROM perfil where deleted_at is null and idperfil="'.$id.'" ');
        return $row = $query->getRow();
    }*/

    public function BusPerfil($id){
       $db=db_connect();
      $query= $db->query('select DISTINCT mo.descripcion as modulos, per.idperfil as idperfil , mo.idmodulo as idmodulo ,perf.descripcion as perfil from perfil as perf join permiso as per on per.idperfil=perf.idperfil join modulo as mo on mo.idmodulo=per.idmodulo where mo.orden=1 and mo.deleted_at is null and per.idperfil="'.$id.'" ');
        $results =$query->getResult();
       return $results;
    }
     public function BusPerfilName($id){
       $db=db_connect();
      $query= $db->query('select DISTINCT mo.descripcion as modulos, per.idperfil as idperfil , mo.idmodulo as idmodulo ,perf.descripcion as perfil from perfil as perf join permiso as per on per.idperfil=perf.idperfil join modulo as mo on mo.idmodulo=per.idmodulo where mo.orden=1 and mo.deleted_at is null and per.idperfil="'.$id.'" ');
        return $row = $query->getRow();
    }

    public function recogerid(){
      $db=db_connect();
      $id=$db->insertID();
      return $id;
    }
}