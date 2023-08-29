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
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

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

    public function information($id)
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

    public function zone_success()
    {
        return view('home.zs_list');
    }
    

    public function tz_list()
    {
        $tz_list = DB::table('tz_groups')
        ->get();
        return view('home.tz_list',compact('tz_list'));
    }

    public function tz_group($id)
    {
        $tz_group = DB::table('tz_courses')
        ->where('tz_group','=',$id)
        ->get();
        return view('home.tz_group',['id' => $id],compact('tz_group'));
    }


    public function sub_status()
    {
        $user_id = Auth::user()->member_id;
        $user_status = DB::table('user_sub_drones')
        ->join('idd_drones','user_sub_drones.drone_id','=','idd_drones.drone_id')
        ->where('user_sub_drones.user_id','=',$user_id)
        ->get();

        $user_driv = DB::table('user_sub_drivings')
        ->join('driving_license_lists','user_sub_drivings.dl_type','=','driving_license_lists.dl_type')
        ->join('idd_branches','user_sub_drivings.branch_id','=','idd_branches.branch_id')
        ->where('user_sub_drivings.user_id','=',$user_id)
        ->get();
        return view('home.sub_status',compact('user_status','user_driv'));
    }

/** insert function */

    public function information1_save(Request $request)
    {            
        $user_id = Session::get('member_id');
        $date_member_hbd = $request->member_hbd;        
        $format_date = Carbon::createFromFormat('d/m/Y', $date_member_hbd)->format('Y-m-d');
        information_p1::insert([
            'member_id' => $user_id,
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

          $member_name = $request->prefix.$request->member_name." ".$request->member_lastname;

          DB::table('user_registers')->insert([
            'member_id' => $user_id,
            'member_name' => $member_name,
            'username' => $request->member_phone,
            'password' => Hash::make($request->member_phone),
            'user_role' => 'user',
            'isAdmin' => '0',
            'created_at' => Carbon::now()
          ]);

          return redirect()->route('home.information2', ['id' => $request->id]);
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

