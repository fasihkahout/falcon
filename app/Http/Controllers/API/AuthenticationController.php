<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class AuthenticationController extends Controller
{
     public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'email|required|unique:users,email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
             return response()->json(['isSuccessful'=>false, 'data'=>'', 'error'=>$validator->errors()], 404);
         }else{
          $input = $request->all();
           $input['password'] = Hash::make($request->password);
            $user = User::create($input);
            
           $accessToken =  $user->createToken('MyApp')->plainTextToken;
            return response()->json(['isSuccessful'=>true, 'data'=> $user, 'token'=>$accessToken, 'message'=>'User Added Successfully'], 200);
         }
    }

    public function login(Request $request)
    {
        $credentials = $request->only('name','email', 'password');

        if(Auth::attempt($credentials)){
            $user = $request->user();
           $accessToken =  $user->createToken('MyApp')->plainTextToken;
             $username =  $user->name;
            return response()->json(['isSuccessful'=>true, 'data'=> $user, 'token'=>$accessToken,  'message'=>'User Login Successfully'], 200);
        }
        else{
            return response()->json(['isSuccessful'=>false, 'data'=> '', 'message'=>'Invalid Username or Password '], 200);
        }
    }
}
