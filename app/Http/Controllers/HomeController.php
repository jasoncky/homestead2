<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController
{
    public function index()
    {
        return view('home');
    }
	
	public function home()
    {
        return view('admin.home');
    }
}
