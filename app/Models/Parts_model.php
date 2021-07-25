<?php

namespace App\Models;

use CodeIgniter\Model;

class Parts_model extends Model
{
    protected $table      = 'stock_part';
    protected $primaryKey = 'kd_part';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['kd_part', 'name_part', 'hr_part', 't_part'];

    // protected $useTimestamps = true;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
