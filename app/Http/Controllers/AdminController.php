<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    
    public function admin_listuser()
    {
        $inf_p1 = DB::table('information_p1s')
        ->orderBy('created_at', 'desc')
        ->get();
        return view('admin.listuser', compact('inf_p1'));
    }
    public function member_detail($id)
    {
        $member_data = DB::table('information_p1s')
        ->join('information_p2s', 'information_p1s.member_id', '=', 'information_p2s.member_id')
        ->join('information_p3s', 'information_p1s.member_id', '=', 'information_p3s.member_id')
        ->where('information_p1s.member_id','=', $id)
        ->get();
        return view('admin.member_detail',compact('member_data'));
    }

    public function member_dashboard()
    {
        return view('admin.member_dashboard');
    }

    public function tz_course()
    {
        $tz_course = DB::table('tz_courses')
        ->orderBy('id', 'ASC')
        ->get();
        return view('admin.tz_course', compact('tz_course'));
    }

    public function admin_index(){
        $user_sub_driv = DB::table('user_sub_drivings')
        ->join('user_registers','user_sub_drivings.user_id','=','user_registers.member_id')
        ->join('driving_license_lists','user_sub_drivings.dl_type','=','driving_license_lists.dl_type')
        ->join('idd_branches','user_sub_drivings.branch_id','=','idd_branches.branch_id')
        ->get();

        $user_sub_drone = DB::table('user_sub_drones')
        ->get();

        return view('admin.dashboard', compact('user_sub_driv','user_sub_drone'));
    }


}
