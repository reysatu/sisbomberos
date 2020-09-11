<?php namespace App\Models;

use CodeIgniter\Model;

class detalleArchivoModel extends Model
{   

    protected $table      = 'detallearchivo';
    protected $primaryKey = 'iddetallearchivo';

    protected $returnType     = 'objet';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['iddetallearchivo','idusuario','idarchivo','accion'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

public function getArchivo($id){
       $db=db_connect();
        $query= $db->query('SELECT * FROM detallearchivo INNER JOIN archivo ON detallearchivo.idarchivo=archivo.idarchivo WHERE detallearchivo.idusuario="'.$id.'"
');
        $results =$query->getResult();
       return $results;
    }
    public function eliminar($descr){
        $db=db_connect();
        $query= $db->query('DELETE det FROM detallearchivo det INNER JOIN archivo a ON det.idarchivo=a.idarchivo WHERE a.descripcion="'.$descr.'"');
         $results =$query->getResult();
        return $results; 
    }

  public function getArchivoEnviado($idusuario){
        $db=db_connect();
        $query= $db->query('select archivo.descripcion as descripcion, archivo.idarchivo as idarchivo from detallearchivo INNER JOIN archivo on detallearchivo.idarchivo=archivo.idarchivo where detallearchivo.idusuario="'.$idusuario.'" and archivo.identificador is null and archivo.deleted_at is null');
         $results =$query->getResult();
        return $results; 
    }
}