<?php namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{   
    protected $table      = 'usuario';
    protected $primaryKey = 'idusuario';

    protected $returnType     = 'objet';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['idusuario','idperfil','apellido','dni','nombre','dni','idperfil','email','user','pass','hash','active','telefono'];

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
    public function validarUsuarioCorreo($correo,$hash){
       $db=db_connect();
      $query= $db->query('SELECT * FROM usuario WHERE hash="'.$hash.'" and email="'.$correo.'" and active is null');
        return $row = $query->getRow();
    }
    public function validarGmail($correo){
      $db=db_connect();
      $query= $db->query('SELECT * FROM usuario WHERE active =1 and deleted_at is null and email="'.$correo.'"');
      return $row = $query->getRow();
    }
    public function validarUser($usua){
      $db=db_connect();
      $query= $db->query('select count(user) as cantidad ,user from usuario where deleted_at is null and user="'.$usua.'" group by user having count(user) > 0');
      return $row = $query->getRow();
    }
    public function validarUserUpdate($id,$usua){
       $db=db_connect();
       $query2= $db->query('SELECT USER from usuario where idusuario="'.$id.'"');
       $row2 = $query2->getRow();
       if($row2->USER==$usua){
          $query= $db->query('select count(user) as cantidad ,user from usuario where deleted_at is null and user="'.$usua.'" group by user having count(user) > 1');
           return $row = $query->getRow();
       }else{
           $query= $db->query('select count(user) as cantidad ,user from usuario where deleted_at is null and user="'.$usua.'" group by user having count(user) > 0');
           return $row = $query->getRow();
       }
      
    }
    public function getIdArchivos(){
        $db=db_connect();
        $query= $db->query('SELECt DISTINCT archivo.idarchivo as idarchivo from usuario INNER JOIN perfil on perfil.idperfil=usuario.idperfil INNER join detallearchivo on usuario.idusuario=detallearchivo.idusuario INNER join archivo on archivo.idarchivo=detallearchivo.idarchivo where perfil.descripcion ="usuario"');
        $results =$query->getResult();
        return $results;
    }
    
}