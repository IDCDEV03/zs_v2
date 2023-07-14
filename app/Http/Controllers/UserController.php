<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\information_p1;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function home_index()
    {
        return view('home.index');
    }

    public function information()
    {
        return view('home.information');
    }

    public function information1_save(Request $request)
    {
        $member_id = hexdec(uniqid());
        $date_hdb = $request->member_hbd;
        $format_date = Carbon::parse($request->member_hbd)->format('Y-m-d');
        information_p1::insert([
            'member_id' => $member_id,
            'member_prefix' => $request->member_prefix,
            'member_name' => $request->member_name,
            'member_lastname' => $request->member_lastname,
            'member_phone' => $request->member_phone,
            'member_hbd' => $format_date,
            'member_gender' => $request->member_gender,
            'member_address' => $request->member_address,
            'member_province' =>$request->member_province,
            'member_amphur' => $request->member_amphur,
            'member_tambon' => $request->member_tambon,
            'member_zipcode' => $request->member_zipcode,
            'member_lineid' => $request->member_lineid,
            'member_career' =>$request->member_career,
            'member_career_name' => $request->member_career_name,
            'member_position' => $request->member_position,
            'member_income' => $request->member_income,
            'member_family_income' => $request->member_family_income,
            'member_family_number' => $request->member_family_number,
            'member_school' => $request->member_school,
            'member_class' => $request->member_class,
            'std_family_income' => $request->std_family_income,
            'std_family_member' => $request->std_family_member,
            'created_at' => Carbon::now()
          ]);
          return redirect()->route('home.information2');
    }
    public function information2()
    {
        return view('home.information_part2');
    }
    public function information3()
    {
        return view('home.information_part3');
    }
    public function information4()
    {
        return view('home.information_part4');
    }

    public function products()
    {
        return view('home.products');
    }
}

