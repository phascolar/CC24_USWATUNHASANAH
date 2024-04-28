<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Useraddress extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'address_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'user_id' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'address' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'region' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'city' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'phone' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('address_id', true);
        $this->forge->createTable('address');
    }

    public function down()
    {
        $this->forge->dropTable('address');
    }
}
