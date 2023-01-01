<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $table            ='student';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['name','email','phone','image','status'];
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useTimestamps    = false;
}

