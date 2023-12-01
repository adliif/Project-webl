<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PemesananModel;
use App\Models\TransaksiModel;
use App\Models\StafModel;

class Owner extends BaseController
{
    public function index()
    {
        $data =[
            'title' => 'Tampilan owner',
        ];
        return view('/owner/index', $data);
    }
    public function pemesanan()
    {   
        $model = new PemesananModel();
        $data = [
            'title' => 'Tampilan owner',
            'reservations' => $model->findAll(), // Ambil data pemesanan
        ];
        return view('/owner/pemesanan', $data);
    }
    public function transaksi()
    {   
        $model = new TransaksiModel();
        $data =[
            'title' => 'Tampilan transaksi',
            'reservations' => $model->findAll(),
        ];
        return view('/owner/transaksi', $data);
    }
    public function staf()
    {
        $staf = new StafModel();

        $data =[
            'title' => 'Tampilan staf',
            'staf' => $staf->findAll(),
        ];
        return view('/owner/staf', $data);
    }

    public function edit()
    {
        $data =[
            'title' => 'Tampilan staf',
        ];
        return view('/owner/stafedit');
    }
    public function tambah()
    {
        $data =[
            'title' => 'Tampilan staf',
        ];
        return view('/owner/staftambah');
    }
    public function createStaf()
    {
        if ($this->request->getMethod() === 'post') {
            $stafModel = new StafModel();

            $data = [
                'nama_staf' => $this->request->getPost('nama_staf'),
                'alamat' => $this->request->getPost('alamat'),
                'no_telepon' => $this->request->getPost('no_telepon'),
            ];

            $stafModel->saveStaf($data);

            return redirect()->to(base_url('staf'))->with('success', 'Staf added successfully');
        }

        $data = [
            'title' => 'Tambah Staf',
        ];

        return view('/owner/staftambah', $data);
    }


}
