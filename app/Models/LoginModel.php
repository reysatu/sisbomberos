<?php namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{   
    public function validarusuario($username,$userpass){
      $db=db_connect();
      $query= $db->query("SELECT u.nombre as nombre,u.idusuario as idusuario, p.descripcion as perfil, p.idperfil as idperfil
                          FROM usuario as u INNER JOIN perfil as p ON u.idperfil=p.idperfil
                          where u.deleted_at is null and p.deleted_at is null and 
                          u.user ='".$username."' and u.pass='".$userpass."'");
      $row = $query->getRow();
      if (isset($row)){
         return $row = $query->getRow();}
    else{
        return false;
      }
    }
    public function getModulos($idperfil){
      $db=db_connect();
      $query= $db->query("SELECT m.idmodulo as idmodulo, m.descripcion as modulos, mo.descripcion as submodulos, mo.idmodulo as idsubmodulo, m.icono as icono , mo.url as url from permiso as p INNER JOIN modulo as m ON p.idmodulo=m.idmodulo INNER JOIN modulo as mo ON mo.padre=m.idmodulo where p.idperfil='".$idperfil."' and m.deleted_at is null and mo.deleted_at is null order by m.idmodulo");
        $results =$query->getResult();
        return $results;
    }
}