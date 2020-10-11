<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Company;
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

        $company = DB::table('companies')
        ->where('contact_person_id', '=', $user->id)
        ->first();

        if(is_null($user->company_id)){

                $a = 0;
                DB::table('users')->UpdateOrInsert(
                    ['company_id' => $company->id, 'updated_at'=>\Carbon\Carbon::now()],
                    //Add missing DB fields
                );
        }

        $a = 0;
        if(is_null($company)){
            return redirect()->route('companyform');
        }

        $data = [
            'user'=>$user,
            'company'=>$company
        ];

        return view('Dashboards.company',compact('data',$data));
    }
}
