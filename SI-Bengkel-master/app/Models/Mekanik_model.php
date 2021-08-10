<?php

namespace App\Models;

use CodeIgniter\Model;


// Model yang nanti akan di akses di controller Master

class Mekanik_model extends Model
{
    protected $table      = 'mekanik';
    protected $primaryKey = 'id_mekanik';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = ['id_mekanik', 'name_mekanik', 'divisi'];



    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}







    // protected $useSoftDeletes = true;

  // protected $useTimestamps = true;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';