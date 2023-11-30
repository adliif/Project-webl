<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\KamarModel;

class KamarHotel extends Seeder
{
    public function run()
    {
        $KamarModel = new KamarModel();

        $KamarModel->save([
            'id' => 1,
            'nama_kamar' => 'Family Room',
            'Jenis_kamar' => 'Penthouse',
        ]);
        $KamarModel -> save([
            'id' => 2,
            'nama_kamar' => 'Family Room',
            'Jenis_kamar' => 'Penthouse',
        ]);
        $KamarModel->save([
            'id' => 3,
            'nama_kamar' => 'Junior Suite Room',
            'Jenis_kamar' => 'Villa',
        ]);
        $KamarModel -> save([
            'id' => 4,
            'nama_kamar' => 'Suite Room',
            'Jenis_kamar' => 'Apartemen',
        ]);
        $KamarModel->save([
            'id' => 5,
            'nama_kamar' => 'Suite Room',
            'Jenis_kamar' => 'Apartemen',
        ]);
        $KamarModel->save([
            'id' => 6,
            'nama_kamar' => 'Junior Suite Room',
            'Jenis_kamar' => 'Villa',
        ]);
    }
}

