<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }
    
    // public function user(): string
    // {
    //     return view('user');
    // }

    public function login(): string
    {
        $data =[
            'title' => 'Login',
            'config' => config('Auth'),
        ];
        return view('login', $data);
    }

    public function register(): string
    {
        $data =[
            'title' => 'Register',
            'config' => config('Auth'),
        ];
        return view('register', $data);
    }
}