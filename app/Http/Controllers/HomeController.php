<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use DB;

class HomeController extends Controller
{


    //
    public function index(){
        $user = Auth::user();

        if (!is_null($user)) {
            # code...
            return redirect()->route('admindash');
        }

        return view('Home.home');
    }

    public function services(){
        //get all services
        $a = 0;

        return view('Home.services');
    }

    public function admin(){
        //get all services
        $a = 0;

        return view('UIs.admin');
    }
    public function company(){
        //get all services
        $a = 0;

        return view('UIs.company');
    }


}
