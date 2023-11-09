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
}
