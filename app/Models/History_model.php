<?php

namespace App\Models;

use CodeIgniter\Model;


// Model yang nanti akan di akses di controller Customer
class History_model extends Model
{
     protected $table      = 'history';
     protected $primaryKey = 'id_history';

     protected $useAutoIncrement = true;

     protected $returnType     = 'array';

     protected $allowedFields = ['spk_id, platNumber', 'custName', 'custAddress', 'mechanic', 'kendaraan', 'sa', 'task1', 'harga1', 'task2', 'harga2', 'totalBayar', 'createdAt'];


     protected $validationRules    = [];
     protected $validationMessages = [];
     protected $skipValidation     = false;
}
