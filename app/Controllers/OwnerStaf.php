<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class OwnerStaf extends BaseController
{
    public function index()
    {
        return view('ownerstaf');
    }

    public function edit()
    {
        return view('ownerstafedit');
    }
    public function tambah()
    {
        return view('ownerstaftambah');
    }
}
