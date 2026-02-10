<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMedicineTypesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type'=>'INT','unsigned'=>true,'auto_increment'=>true],
            'type_name' => ['type'=>'VARCHAR','constraint'=>100],
            'created_at' => ['type'=>'DATETIME','null'=>true]
        ]);
        $this->forge->addKey('id',true);
        $this->forge->createTable('medicine_types');
    }

    public function down()
    {
        $this->forge->dropTable('medicine_types');
    }
}
