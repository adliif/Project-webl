<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class JenisKamarSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'type_kamar' => 'Apartemen',
            ],
            [
                'type_kamar' => 'Villa',
            ],
            [
                'type_kamar' => 'Family house',
            ],
            // Tambahkan data lain jika diperlukan
        ];

        // Simple Queries
        // $this->db->table('jeniskamar')->insertBatch($data);

        // Using Query Builder
        $this->db->table('jeniskamar')->insertBatch($data);
    }
}
