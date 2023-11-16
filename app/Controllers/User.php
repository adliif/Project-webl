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

    public function contact()
    {
        $data =[
            'title' => 'Contact Us',
        ];
        return view('/user/contact', $data);
    }

    public function reservasi()
    {
        $data =[
            'title' => 'Reservasi',
        ];
        return view('/user/reservasi', $data);
    }

    public function transaction()
    {
        $data =[
            'title' => 'Transaction',
        ];
        return view('/user/transaction', $data);
    }
}
