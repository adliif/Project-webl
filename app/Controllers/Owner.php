<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PemesananModel;
use App\Models\TransaksiModel;
use App\Models\StafModel;
use App\Models\KamarModel;
use App\Models\JenisKamarModel;
use App\Models\StatusKamarModel;

class Owner extends BaseController
{
    public function index()
    {
        $data = [
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
        $data = [
            'title' => 'Tampilan transaksi',
            'reservations' => $model->findAll(),
        ];
        return view('/owner/transaksi', $data);
    }

    public function staf()
    {
        $staf = new StafModel();

        $data = [
            'title' => 'Tampilan staf',
            'staf' => $staf->findAll(),
        ];
        return view('/owner/staf', $data);
    }

    public function editStaf($id)
    {
        $stafModel = new StafModel();

        $data = [
            'title' => 'Edit Staf',
            'staf' => $stafModel->find($id), // Retrieve staf details by ID
        ];

        return view('/owner/stafedit', $data);
    }

    public function updateStaf($id)
    {
        $stafModel = new StafModel();

        if ($this->request->getMethod() === 'post') {
            $data = [
                'nama_staf' => $this->request->getPost('nama_staf'),
                'alamat' => $this->request->getPost('alamat'),
                'no_telepon' => $this->request->getPost('no_telepon'),
            ];

            $stafModel->update($id, $data);

            return redirect()->to(base_url('staf'))->with('success', 'Staf updated successfully');
        }

        return redirect()->back()->with('error', 'Invalid request');
    }

    public function tambah()
    {
        $data = [
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

    public function deleteStaf($stafId)
    {
        $stafModel = new StafModel();
        $stafModel->delete($stafId);
        return redirect()->to('/staf')->with('success', 'Staf deleted successfully');
    }

    public function kamar()
    {
        $kamarModel = new KamarModel();
        $data = [
            'title' => 'Tampilan kamar',
            'kamar' => $kamarModel->findAllWithTypeNameAndStatus(),
        ];

        return view('/owner/kamar', $data);
    }

    public function editKamar($id)
    {
        $kamarModel = new KamarModel();
        $jenisKamarModel = new JenisKamarModel();
        $statusKamarModel = new StatusKamarModel();

        $data = [
            'title' => 'Edit Kamar',
            'kamar' => $kamarModel->find($id),
            'jenis_kamar' => $jenisKamarModel->findAll(),
            'status_kamar' => $statusKamarModel->findAll(),
        ];

        return view('/owner/kamaredit', $data);
    }

    public function updateKamar($id)
    {
        $kamarModel = new KamarModel();

        if ($this->request->getMethod() === 'post') {
            // Get data from the form
            $data = [
                'nama_kamar' => $this->request->getPost('nama_kamar'),
                'type_kamar' => $this->request->getPost('type_kamar'),
                'status' => $this->request->getPost('status'),
                'harga' => $this->request->getPost('harga'),
                // ... add other fields as needed ...
            ];

            // Update data in the 'kamar' table
            $kamarModel->update($id, $data);

            // Redirect or perform other actions after updating
            return redirect()->to(base_url('kamar'))->with('success', 'Kamar updated successfully');
        }

        return redirect()->back()->with('error', 'Invalid request');
    }

    public function tambahKamar()
    {
        $jenisKamarModel = new JenisKamarModel();
        $statusKamarModel = new StatusKamarModel();

        $data = [
            'title' => 'Tambah Kamar',
            'jenis_kamar' => $jenisKamarModel->findAll(),
            'status_kamar' => $statusKamarModel->findAll(),
        ];

        return view('/owner/kamartambah', $data);
    }

    public function createKamar()
{
    if ($this->request->getMethod() === 'post') {
        $kamarModel = new KamarModel();

        // Ganti 'jenis_kamar' menjadi 'type_kamar'
        $data = [
            'nama_kamar' => $this->request->getPost('nama_kamar'),
            'type_kamar' => $this->request->getPost('type_kamar'),
            'status' => $this->request->getPost('status'),
            'harga' => $this->request->getPost('harga'),
        ];

        $kamarModel->saveKamar($data);

        return redirect()->to(base_url('kamar'))->with('success', 'Kamar added successfully');
    }

    $jenisKamarModel = new JenisKamarModel();
    $statusKamarModel = new StatusKamarModel();

    $data = [
        'title' => 'Tambah Kamar',
        'jenis_kamar' => $jenisKamarModel->findAll(),
        'status_kamar' => $statusKamarModel->findAll(),
    ];

    return view('/owner/kamartambah', $data);
}

    public function deleteKamar($kamarId)
    {
        $kamarModel = new KamarModel();
        $kamarModel->delete($kamarId);
        return redirect()->to('/kamar')->with('success', 'Kamar deleted successfully');
    }
}
