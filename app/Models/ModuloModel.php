<?php namespace App\Models;

use CodeIgniter\Model;

class ModuloModel extends Model
{   
    protected $table      = 'modulo';
    protected $primaryKey = 'idmodulo';

    protected $returnType     = 'objet';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['idmodulo','descripcion','padre','orden'];

   protected $useTimestamps = true;
   protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
    public function BuscarModulo(){
       $db=db_connect();
        $query= $db->query('SELECT `modulo`.*,(SELECT GROUP_CONCAT(DISTINCT modu.descripcion) FROM modulo as mo LEFT JOIN modulo as modu on modu.padre=mo.idmodulo WHERE modu.padre=modulo.idmodulo ) as submodulos FROM modulo where deleted_at is null and orden=1');
        $results =$query->getResult();
        return $results;
    }
    public function BusModulo($id){
         $db=db_connect();
       $query= $db->query('select * from modulo where idmodulo="'.$id.'"');
        return $row = $query->getRow();
    }
    

    public function getSubModulos(){
       $db=db_connect();
      $query= $db->query('select * from modulo where orden="2" and deleted_at is null');
        $results =$query->getResult();
       return $results;
    }


     public function SubmodulosSelec($id){
       $db=db_connect();
      $query= $db->query('SELECT mo.idmodulo as idmodulo, mo.descripcion as modulo , modu.idmodulo as idsubmodulo , modu.descripcion as submodulo from modulo as mo join modulo as modu on modu.padre=mo.idmodulo where mo.idmodulo="'.$id.'" ');
        $results =$query->getResult();
       return $results;
    }

    public function recogerid(){
      $db=db_connect();
      $id=$db->insertID();
      return $id;
    }
    public function delete_submodulos($id){
      $db=db_connect();
      $query= $db->query('UPDATE modulo set padre=0 where padre="'.$id.'" ');
        $results =$query->getResult();
       return $results;
    }
}