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

class LoginController extends Controller
{
    //
    public function showlogin(){

        return view('Home.home');
    }


    public function login(Request $request){
        //Check for user role before login.
        $a = 0;

        //$credentials = $request->only('email', 'password');

        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $email = $request['email'];
        $password = $request['password'];


        $a = 0;
        try {
            //code...
            if (auth()->attempt(request(['email', 'password'])) == false) {
                return back()->withErrors([
                    'message' => 'The email or password is incorrect, please try again'
                ]);
            }
        } catch (\Throwable $th) {
            throw $th;
        }


        // if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Authentication passed...

            $user = Auth::user();
            $a = 0;

            //$role = Auth::User()->role_id;
            //$usrRole = $user['role_id'];
            $role = $user['role_id'];

            $a = 0;

            switch ($role){

                case 1://Admin role
                    //return route('admindash');
                    return redirect()->route('admindash');
                break;

                case 2://Tenant
                $a = 0;
                //return route('hutdash');
                return redirect()->route('hutdash');
                break;

                default:
                    return redirect()->route('userdash');
            }
                return redirect()->route('login');
        // }



        return redirect()->route('login');
    }


    public function logout(){
        Session::flush();
        Auth::logout();

        //auth()->logout();

        return redirect('/');
    }
}
