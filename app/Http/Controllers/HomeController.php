<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){

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
