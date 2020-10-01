<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use DB;
use DateTime;
use Carbon;

class RegistrationController extends Controller
{
    //

    private $status_code = 200;

    public function form(){

        return view('Auth.signup');
    }

    public function adminform(){

        return view('Auth.admin');
    }


    //Post at /api/user-signup
    public function userSignUp(Request $request){

        $a=1;
        $validator = Validator::make($request->all(), [
            'fullname' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);


        $request['password']=Hash::make($request['password']);
        $request['remember_token'] = Str::random(10);

        $user_status            =           User::where("email", $request->email)->first();

        if(!is_null($user_status)) {
           return response()->json([
               "status" => "failed",
               "success" => false,
               "message" => "Whoops! email already registered"
               ]);
        }

        $role = $request['role_id'];
        $company = $request['company_id'];
        $mobile = $request['mobile'];
        $fullname = $request['fullname'];

        $a=1;



        if ($role==1){
            //Super Admin
            //redirects to user's dashboard based on role.
            $a=2;

            DB::table('users')->insert([
                'fullname' => $fullname,
                'email' => $request['email'] ,
                'password' => $request['password'] ,
                'role_id' => $role ,
                'company_id' => $company ,
                'mobile' => $mobile,
                'remember_token'=>$request['remember_token'],
                'created_at'=>\Carbon\Carbon::now()
            ]);

            $a=3;

            //auth()->login($user);

            return redirect()->route('admindash');

        }else if ($role==2){
            //System User
            //redirects to user's dashboard based on role.
            $a=2;
            DB::table('users')->insert([
                'fullname' => $fullname,
                'email' => $request['email'] ,
                'password' => $request['password'] ,
                'role_id' => $role ,
                'company_id' => $company ,
                'mobile' => $mobile,
                'remember_token'=>$request['remember_token'],
                'created_at'=>\Carbon\Carbon::now()
            ]);

            $a=3;
            return redirect()->route('home');

        }else if ($role==3){
            //Company Admin
            //redirects to user's dashboard based on role.
            $a=2;
            DB::table('users')->insert([
                'fullname' => $fullname,
                'email' => $request['email'] ,
                'password' => $request['password'] ,
                'role_id' => $role ,
                'company_id' => $company ,
                'mobile' => $mobile,
                'remember_token'=>$request['remember_token'],
                'created_at'=>\Carbon\Carbon::now()
            ]);

            $a=3;
            return redirect()->route('companydash');

        }

        return redirect()->route('home');
    }

    public function userLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);
        if ($validator->fails())
        {
            return response(['errors'=>$validator->errors()->all()], 422);
        }
        $user = User::where('email', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $token = $user->createToken('Laravel Password Grant Client')->accessToken;
                $response = ['token' => $token];
                return response($response, 200);
            } else {
                $response = ["message" => "Password mismatch"];
                return response($response, 422);
            }
        } else {
            $response = ["message" =>'User does not exist'];
            return response($response, 422);
        }
    }

    public function logout(Request $request){

    }

    private function createdUser($user){
        if(!is_null($user)) {
            return response()->json([
                    "status" => $this->status_code,
                    "success" => true,
                    "message" => "Registration completed successfully",
                    "data" => $user
                ]);
        }

        else {
            return response()->json([
                    "status" => "failed",
                    "success" => false,
                    "message" => "failed to register"
                ]);
        }
    }

}
