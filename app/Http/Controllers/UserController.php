<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\information_p1;
use App\Models\information_p2;
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

    public function dashboard()
    {
        return view('home.dashboard');
    }

    public function information()
    {
        return view('home.information');
    }

    public function information2($id)
    {
        return view('home.information_part2');
    }

    public function information3($id)
    {
        return view('home.information_part3');
    }
    public function information4($id)
    {
        return view('home.information_part4');
    }

    public function products()
    {
        return view('home.products');
    }

    public function attitudetest()
    {
        return view('home.attitudetest');
    }

    public function associate()
    {
        return view('home.associate');
    }

    public function complete_page()
    {
        return view('home.complete');
    }

/** insert function */

    public function information1_save(Request $request)
    {
     
        $member_id = Str::random(10);
        $date_member_hbd = $request->member_hbd;        
        $format_date = Carbon::createFromFormat('d/m/Y', $date_member_hbd)->format('Y-m-d');
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
          return redirect()->route('home.information2', ['id' => $member_id]);
    }

    public function information2_save(Request $request, $id)
    {
        $option1 = $request->input('ins1', []);
        $option1String = implode(', ', $option1);

        $option2 = $request->input('ins2', []);
        $option2String = implode(', ', $option2);

        $option3 = $request->input('ins3', []);
        $option3String = implode(', ', $option3);

        information_p2::insert([
            'member_id' => $id,
            'member_multimedia' => $option1String,
            'member_activity' => $option2String,
            'member_travel' => $option3String,
            'member_license_chk' => $request->license_chk,
            'created_at' => Carbon::now()
        ]);
        return redirect()->route('home.information3', ['id' => $id]);
    }

    public function information4_save (Request $request, $id)
    {
        $request->validate(
            [           
              'input1' => 'required',
              'input2' => 'required',
              'input3' => 'required'      
            ],
            [
              'input1.required' => "กรุณาเลือกคำตอบ",
              'input2.required' => "กรุณาเลือกคำตอบ",
              'input3.required' => "กรุณาเลือกคำตอบ"
            ]
          );

          $option = $request->input('q4', []);
          $optionString = implode(', ', $option);
  
          DB::table('information_p3s')->insert([
            'member_id'=>$id,
            'question1'=>$request->input1,
            'question2'=>$request->input2,
            'question3'=>$request->input3,
            'know_us'=>$optionString,
            'created_at' => Carbon::now()
          ]);

          return redirect()->route('home.complete');

    }

}

