<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class OwnerPemesanan extends BaseController
{
    public function index(): string
    {
        return view('ownerpemesanan');
    }
}
