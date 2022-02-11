<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {

        //return view('welcome_message');
        return view('index');
    }
    public function admin()
    {

        //return view('welcome_message');
        return view('/admin-page/dashboard');
    }
}
