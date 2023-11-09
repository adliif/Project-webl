<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Staf extends BaseController
{
    public function index()
    {
        return view('stafhome');
    }

    public function pemesanan()
    {
        return view('stafpemesanan');
    }

    public function transaksi()
    {
        return view('staftransaksi');
    }
}
