<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {

        //return view('welcome_message');
        return view('index');
    }
    public function kereta()
    {

        //return view('welcome_message');
        return view('daftar-kereta');
    }
}
