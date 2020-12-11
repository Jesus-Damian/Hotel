<?php namespace App\Models;

use CodeIgniter\Model;

class db_reser extends Model
{
    protected $table      = 'reservacion';
    protected $primaryKey = 'idReservacion';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['fechaLlegada', 'fechaSalida', 'idHabitacion', 'idUsuario'];

    protected $useTimestamps = false; 
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}

