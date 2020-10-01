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

class DashboardController extends Controller
{
    //
    public function admin()
    {
        $a = 0;
        $user = Auth::user();

        $data = [
            'user'=>$user,
        ];

        return view('Dashboards.admin',compact('data',$data));
    }

    public function company()
    {
        $a = 0;
        $user = Auth::user();

        //Checki if user Has Company


        $data = [
            'user'=>$user,
        ];

        return view('Dashboards.company',compact('data',$data));
    }
}
