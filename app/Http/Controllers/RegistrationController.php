<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class RegistrationController extends Controller
{
	public function create()
    {
        return view('registration.create');
    }
	
	public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        $member = Member::create(request(['name', 'email', 'password']));
    }
}
