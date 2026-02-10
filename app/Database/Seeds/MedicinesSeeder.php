<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MedicinesSeeder extends Seeder {
    public function run() {
        $data = [
            [
                'name' => 'Paracetamol 500mg',
                'generic_name' => 'Paracetamol',
                'brand_name' => 'Panadol',
                'description' => 'Obat pereda nyeri dan demam',
                'type_id' => 1, // Tablet
                'category_id' => 1, // Pain Relief
                'manufacturer' => 'PT Kalbe Farma',
                'requires_prescription' => false,
                'image_url' => '/images/paracetamol.jpg',
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Amoxicillin 250mg',
                'generic_name' => 'Amoxicillin',
                'brand_name' => 'Amoxsan',
                'description' => 'Antibiotik untuk infeksi bakteri',
                'type_id' => 4, // Capsule
                'category_id' => 4, // Antibiotics
                'manufacturer' => 'PT Kimia Farma',
                'requires_prescription' => true,
                'image_url' => '/images/amoxicillin.jpg',
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Vitamin C 1000mg',
                'generic_name' => 'Ascorbic Acid',
                'brand_name' => 'Ester-C',
                'description' => 'Suplemen vitamin C untuk daya tahan tubuh',
                'type_id' => 1, // Tablet
                'category_id' => 3, // Vitamins
                'manufacturer' => 'PT Sanbe Farma',
                'requires_prescription' => false,
                'image_url' => '/images/vitaminc.jpg',
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'OBH Combi Syrup',
                'generic_name' => 'Dextromethorphan',
                'brand_name' => 'OBH Combi',
                'description' => 'Obat batuk dan flu',
                'type_id' => 2, // Syrup
                'category_id' => 5, // Cold & Flu
                'manufacturer' => 'PT Kalbe Farma',
                'requires_prescription' => false,
                'image_url' => '/images/obh.jpg',
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Cetirizine 10mg',
                'generic_name' => 'Cetirizine',
                'brand_name' => 'Cetinal',
                'description' => 'Obat alergi dan gatal-gatal',
                'type_id' => 1, // Tablet
                'category_id' => 2, // Allergy
                'manufacturer' => 'PT Dexa Medica',
                'requires_prescription' => false,
                'image_url' => '/images/cetirizine.jpg',
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s')
            ]
        ];
        $this->db->table('medicines')->insertBatch($data);
    }
}
