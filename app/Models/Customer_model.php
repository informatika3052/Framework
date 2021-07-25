<?php

namespace App\Models;

use CodeIgniter\Model;

class Customer_model extends Model
{
    protected $table      = 'spk';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['plat_number', 'cust_name', 'cust_address', 'mekanik', 'type_kendaraan', 'ser_advisor', 'desc1', 'price1', 'desc2', 'price2', 'total', 'created_at'];

    // protected $useTimestamps = true;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
