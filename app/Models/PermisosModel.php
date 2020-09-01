<?php namespace App\Models;

use CodeIgniter\Model;

class PermisosModel extends Model
{   
    protected $table      = 'permiso';
    protected $primaryKey = 'idpermiso';

    protected $returnType     = 'objet';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['idpermiso','idperfil','idmodulo'];

   protected $useTimestamps = false;
   protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

}