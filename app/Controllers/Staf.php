<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Staf extends BaseController
{
    public function index()
    {
        $data =[
            'title' => 'Tampilan staf',
        ];
        return view('/staf/index', $data);
    }

    public function viewPemesanan(): string
    {
        return view('ownerpemesanan');
    }

    public function viewStaf()
    {
        return view('ownerstaf');
    }

    public function editStaf()
    {
        return view('ownerstafedit');
    }
    public function tambahStaf()
    {
        return view('ownerstaftambah');
    }

    public function transaksiOwner()
    {
        return view('ownertransaksi');
    }

    public function viewHome()
    {
        return view('stafhome');
    }

    public function pemesanan()
    {
        return view('stafpemesanan');
    }

    public function transaksiStaf()
    {
        return view('staftransaksi');
    }
}
