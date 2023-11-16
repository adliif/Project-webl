<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Owner extends BaseController
{
    public function index()
    {
        $data =[
            'title' => 'Tampilan owner',
        ];
        return view('/owner/index', $data);
    }
}
