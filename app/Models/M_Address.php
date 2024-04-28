<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Address extends Model
{
    protected $table            = 'address';
    protected $primaryKey       = 'address_id';
    protected $allowedFields    = ['user_id','name','email','no_tlp','address','region','city','phone'];

    // Dates
    protected $useTimestamps = true;
} 
