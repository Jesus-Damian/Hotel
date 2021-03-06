<?php namespace App\Models;

use CodeIgniter\Model;

class db_hotel extends Model
{ 
    protected $table      = 'usuario';
    protected $primaryKey = 'idUsuario';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['nombreU', 'apellidoU', 'email', 'password'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}