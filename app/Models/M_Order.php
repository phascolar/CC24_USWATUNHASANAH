<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Order extends Model
{
    protected $table            = 'order';
    protected $primaryKey       = 'order_id';
    protected $allowedFields    = ['product_id','product_name','product_price','product_brand','total_harga','order_tanggal'];

    // Dates
    protected $useTimestamps = true;
}
 