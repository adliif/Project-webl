<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class StatusKamarSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'status' => 'Tersedia',
            ],
            [
                'status' => 'Tidak Tersedia',
            ],
            // Tambahkan data lain jika diperlukan
        ];

        // Simple Queries
        // $this->db->table('statuskamar')->insertBatch($data);

        // Using Query Builder
        $this->db->table('statuskamar')->insertBatch($data);
    }
}
