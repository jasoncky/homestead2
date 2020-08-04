<?php
   
namespace App\Http\Controllers\API\V1;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\V1\BaseController as BaseController;
use App\User;
use App\Member;
use Illuminate\Support\Facades\Auth;
use Validator;
   
class AuthController extends BaseController
{
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    /*
	public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('MyApp')->accessToken;
        $success['name'] =  $user->name;
		$success['user_id'] =  $user->id;
   
        return $this->sendResponse($success, 'User register successfully.');
    }
    */
	
    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){ 
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('MyApp')-> accessToken; 
            $success['name'] =  $user->name;
			$success['user_id'] =  $user->id;
   
            return $this->sendResponse($success, 'User login successfully.');
        } 
        else{ 
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        } 
    }
	
	public function logout(Request $request)
	{
		$request->user()->token()->revoke();
		return $this->sendResponse(null, 'User logout successfully.');
    }
	
	public function memberlogin(Request $request)
    {
        if(Auth::guard('member')->attempt(['email' => request('email'), 'password' => request('password')])){
			$user = Auth::guard('member')->user();
			$success['token'] =  $user->createToken('member')->accessToken;
			$success['name'] =  $user->name;
			$success['member_id'] =  $user->id;
			return $this->sendResponse($success, 'Member login successfully.');
		}
		else{
			return response()->json(['error'=>'Unauthorised'], 401);
		} 
    }
	
	public function memberlogout(Request $request)
	{
		$request->user('member-api')->token()->revoke();
		return $this->sendResponse(null, 'Member logout successfully.');
    }
}