<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Migration: products table (NeonBites menu items)
 * Columns: id, product_name, desc, price, img (+ timestamps & soft deletes for lifecycle management)
 * Note: Using column name `desc` per specification, though `DESC` is a SQL keyword in ORDER BY.
 *       If portability issues occur, rename to `description` and adjust code accordingly.
 * @property \CodeIgniter\Database\Forge $forge
 */

class CreateNeonTable extends Migration
/**Naming should make sense */
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'product_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 150,
                'null'       => false,
            ],
            'desc' => [ // short description; consider renaming to 'description' to avoid reserved keyword confusion
                'type'       => 'TEXT',
                'null'       => true,
            ],
            'price' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
                'null'       => false,
                'default'    => '0.00',
            ],
            'img' => [ // image path or URL
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey('product_name');
        $this->forge->createTable('products', true);
    }

    public function down()
    {
        $this->forge->dropTable('products', true);
    }
}
