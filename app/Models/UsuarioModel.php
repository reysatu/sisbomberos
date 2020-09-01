<?php namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{   
    protected $table      = 'usuario';
    protected $primaryKey = 'idusuario';

    protected $returnType     = 'objet';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['idusuario','idperfil','apellido','dni','nombre','dni','idperfil','email','user','pass'];

   protected $useTimestamps = true;
   protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
    public function buscarusuario(){
       $db=db_connect();
      $query= $db->query('SELECT * FROM usuario INNER JOIN perfil ON usuario.idperfil=perfil.idperfil and usuario.deleted_at is null;');
        $results =$query->getResult();
       return $results;
    }
    public function getperfil(){
       $db=db_connect();
      $query= $db->query('SELECT * FROM perfil');
        $results =$query->getResult();
       return $results;
    }
    public function Busuario($id){
       $db=db_connect();
      $query= $db->query('SELECT usuario.* , perfil.descripcion as descripcion,perfil.idperfil as idperfil FROM usuario INNER JOIN perfil ON usuario.idperfil=perfil.idperfil where usuario.idusuario="'.$id.'" ');
        return $row = $query->getRow();
    }
}