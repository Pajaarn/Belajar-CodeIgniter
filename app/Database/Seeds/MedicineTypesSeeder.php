<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MedicineTypesSeeder extends Seeder {
    public function run() {
        $data = [
            ['type_name' => 'Tablet', 'created_at' => date('Y-m-d H:i:s')],
            ['type_name' => 'Syrup', 'created_at' => date('Y-m-d H:i:s')],
            ['type_name' => 'Ointment', 'created_at' => date('Y-m-d H:i:s')],
            ['type_name' => 'Capsule', 'created_at' => date('Y-m-d H:i:s')],
            ['type_name' => 'Injection', 'created_at' => date('Y-m-d H:i:s')]
        ];
        $this->db->table('medicine_types')->insertBatch($data);
    }
}