<?php

namespace App\Models;

use CodeIgniter\Model;

class M_User extends Model
{
    protected $table            = 'user';
    protected $primaryKey       = 'user_id';
    protected $allowedFields    = ['name','email','password','address','no_tlp'];

    // Dates
    protected $useTimestamps = true;
}
