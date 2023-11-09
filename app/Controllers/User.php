<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{
    public function index()
    {
        $data =[
            'title' => 'Tampilan user',
        ];
        return view('/user/index', $data);
    }
}
