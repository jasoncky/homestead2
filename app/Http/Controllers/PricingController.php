<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function index()
    {
        return view('pricing.index');
    }
	
	public function redirect($plan)
    {
        session()->put('plan', $plan);
		return redirect()->route('register');
    }
}
