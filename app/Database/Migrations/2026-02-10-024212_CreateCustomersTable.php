<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCustomersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type'=>'INT','unsigned'=>true,'auto_increment'=>true],
            'user_id' => ['type'=>'INT','unsigned'=>true],
            'full_name' => ['type'=>'VARCHAR','constraint'=>150],
            'birth_date' => ['type'=>'DATE','null'=>true],
            'gender' => ['type'=>'ENUM','constraint'=>['male','female']],
            'address' => ['type'=>'TEXT','null'=>true],
            'city' => ['type'=>'VARCHAR','constraint'=>100,'null'=>true],
            'province' => ['type'=>'VARCHAR','constraint'=>100,'null'=>true],
            'postal_code' => ['type'=>'VARCHAR','constraint'=>10,'null'=>true],
            'created_at' => ['type'=>'DATETIME','null'=>true]
        ]);
        $this->forge->addKey('id',true);
        $this->forge->createTable('customers');
    }

    public function down()
    {
        $this->forge->dropTable('customers');
    }
}
