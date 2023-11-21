<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PemesananModel;
use App\Models\TransaksiModel;

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
        $data =[
            'title' => 'Tampilan staf',
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

}
