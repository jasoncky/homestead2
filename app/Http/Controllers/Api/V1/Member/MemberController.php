<?php
namespace App\Http\Controllers\Api\V1\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use JWTFactory;
use JWTAuth;
use JWTAuthException;
use App\Member;

use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{		
	public function login(){
		if(Auth::guard('member')->attempt(['email' => request('email'), 'password' => request('password')])){
			$user = Auth::guard('member')->user();
			$success['token'] =  $user->createToken('member')->accessToken;
			return response()->json(['success' => $success], $this->successStatus);
		}
		else{
			return response()->json(['error'=>'Unauthorised'], 401);
		}
	}
	
	
	public function getDetails()
	{
		$user = Auth::guard('member-api')->user();
		return response()->json(['success' => $user], $this->successStatus);
	}


}