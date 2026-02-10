<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder {
    public function run() {
        $data = [
            [
                'name' => 'Admin Pharmacy',
                'email' => 'admin@pharmacy.com',
                'password_hash' => password_hash('admin123', PASSWORD_BCRYPT),
                'phone' => '081234567890',
                'role' => 'admin',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Dr. Sarah Pharmacist',
                'email' => 'sarah@pharmacy.com',
                'password_hash' => password_hash('pharmacist123', PASSWORD_BCRYPT),
                'phone' => '081234567891',
                'role' => 'pharmacist',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Budi Customer',
                'email' => 'budi@gmail.com',
                'password_hash' => password_hash('customer123', PASSWORD_BCRYPT),
                'phone' => '081234567892',
                'role' => 'customer',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Siti Customer',
                'email' => 'siti@gmail.com',
                'password_hash' => password_hash('customer123', PASSWORD_BCRYPT),
                'phone' => '081234567893',
                'role' => 'customer',
                'created_at' => date('Y-m-d H:i:s')
            ]
        ];
        $this->db->table('users')->insertBatch($data);
    }
}
