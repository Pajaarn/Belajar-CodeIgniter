<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMedicinesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type'=>'INT','unsigned'=>true,'auto_increment'=>true],
            'name' => ['type'=>'VARCHAR','constraint'=>200],
            'generic_name' => ['type'=>'VARCHAR','constraint'=>100,'null'=>true],
            'brand_name' => ['type'=>'VARCHAR','constraint'=>100,'null'=>true],
            'description' => ['type'=>'TEXT','null'=>true],
            'type_id' => ['type'=>'INT','unsigned'=>true],
            'category_id' => ['type'=>'INT','unsigned'=>true],
            'manufacturer' => ['type'=>'VARCHAR','constraint'=>150,'null'=>true],
            'requires_prescription' => ['type'=>'BOOLEAN','default'=>false],
            'image_url' => ['type'=>'VARCHAR','constraint'=>255,'null'=>true],
            'status' => ['type'=>'ENUM','constraint'=>['active','inactive'],'default'=>'active'],
            'created_at' => ['type'=>'DATETIME','null'=>true]
        ]);
        $this->forge->addKey('id',true);
        $this->forge->createTable('medicines');
    }

    public function down()
    {
        $this->forge->dropTable('medicines');
    }
}
