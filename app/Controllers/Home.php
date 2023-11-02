<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    
    public function home(): string
    {
        return view('index');
    }

    public function login(): string
    {
        return view('login');
    }

    public function signIn(): string
    {
        return view('signIn');
    }

    public function signUp(): string
    {
        return view('signUp');
    }
}