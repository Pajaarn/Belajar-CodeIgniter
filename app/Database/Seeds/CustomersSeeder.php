<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CustomersSeeder extends Seeder {
    public function run() {
        $data = [
            [
                'user_id' => 3, // Budi
                'full_name' => 'Budi Santoso',
                'birth_date' => '1990-05-15',
                'gender' => 'male',
                'address' => 'Jl. Margonda Raya No. 100',
                'city' => 'Depok',
                'province' => 'West Java',
                'postal_code' => '16424',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'user_id' => 4, // Siti
                'full_name' => 'Siti Nurhaliza',
                'birth_date' => '1995-08-20',
                'gender' => 'female',
                'address' => 'Jl. Raya Sawangan No. 50',
                'city' => 'Depok',
                'province' => 'West Java',
                'postal_code' => '16511',
                'created_at' => date('Y-m-d H:i:s')
            ]
        ];
        $this->db->table('customers')->insertBatch($data);
    }
}
