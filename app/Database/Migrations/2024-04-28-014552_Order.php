<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Order extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'order_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'product_id' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'product_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'product_price' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'product_brand' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'total_harga' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'order_tanggal' => [
                'type' => 'timestamp',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('order_id', true);
        $this->forge->createTable('order');
    }

    public function down()
    {
        $this->forge->dropTable('order');
    }
}
