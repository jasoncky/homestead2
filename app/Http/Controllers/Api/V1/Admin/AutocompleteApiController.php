<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Member;

class AutocompleteApiController extends Controller
{
	public function membersearch(Request $request)
	{
		 return Member::where('name','like','%'.$request->input('term').'%')->get();
	}
}