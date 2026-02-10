<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call('UsersSeeder');
        $this->call('CustomersSeeder');
        $this->call('CategoriesSeeder');
        $this->call('MedicineTypesSeeder');
        $this->call('MedicinesSeeder');
    }
}
