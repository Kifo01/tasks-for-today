<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('users')->insert([
            'username'   => 'virgilio.marquez',
            'full_name'  => 'Virgilio M. Marquez Jr.',
            'email'      => 'virgilio.marquez@example.com',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
