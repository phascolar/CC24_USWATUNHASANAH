<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Product extends Model
{
    protected $table            = 'product';
    protected $primaryKey       = 'product_id';
    protected $allowedFields    = ['product_name','product_price','product_brand','product_detail','product_img'];

    // Dates
    protected $useTimestamps = true;
}
 