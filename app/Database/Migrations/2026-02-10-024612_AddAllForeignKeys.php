<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddAllForeignKeys extends Migration
{
    public function up() {
        // Customers -> Users
        $this->db->query('
            ALTER TABLE customers 
            ADD CONSTRAINT fk_customers_users 
            FOREIGN KEY (user_id) REFERENCES users(id) 
            ON DELETE CASCADE ON UPDATE CASCADE
        ');
        
        // Medicines -> Medicine Types
        $this->db->query('
            ALTER TABLE medicines 
            ADD CONSTRAINT fk_medicines_types 
            FOREIGN KEY (type_id) REFERENCES medicine_types(id) 
            ON DELETE CASCADE ON UPDATE CASCADE
        ');
        
        // Medicines -> Categories
        $this->db->query('
            ALTER TABLE medicines 
            ADD CONSTRAINT fk_medicines_categories 
            FOREIGN KEY (category_id) REFERENCES categories(id) 
            ON DELETE CASCADE ON UPDATE CASCADE
        ');
    }

    public function down() {
        $this->db->query('ALTER TABLE customers DROP FOREIGN KEY fk_customers_users');
        $this->db->query('ALTER TABLE medicines DROP FOREIGN KEY fk_medicines_types');
        $this->db->query('ALTER TABLE medicines DROP FOREIGN KEY fk_medicines_categories');
    }
}
