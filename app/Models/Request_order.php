<?php

namespace App\Models;

use CodeIgniter\Model;




// Model yang nanti akan di akses di controller Master 

class Request_order extends Model
{
    protected $table      = 'req_order';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = ['id_spk', 'nopol', 'part1', 'qty1', 'perPcs1', 'total1', 'part2', 'qty2', 'perPcs2', 'total2', 'part3', 'qty3', 'perPcs3', 'total3', 'akumulasi_total', 'tgl_req_order'];

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}








// protected $useSoftDeletes = true;

    // protected $useTimestamps = true;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';
