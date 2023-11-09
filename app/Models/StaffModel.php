<?php

namespace App\Models;

use CodeIgniter\Model;

class StaffModel extends Model
{
    protected $table = 'staf';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_staf', 'alamat', 'no_telepon'];
}
