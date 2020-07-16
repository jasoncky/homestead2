<?php

namespace App\Http\Controllers\admin;

use App\Member;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AutocompleteController extends Controller
{
    public function memberautocomplete(Request $request){
        if($request->has('term')){
            return Member::where('name','like','%'.$request->input('term').'%')->get();
        }
    }
}
