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
        ->join('idd_drones','user_sub_drones.drone_id','=','idd_drones.drone_id')
        ->join('user_registers','user_sub_drones.user_id','=','user_registers.member_id')
        ->get();

        $user_sub_tzs = DB::table('user_sub_tzs')
        ->join('tz_courses','user_sub_tzs.tz_id','=','tz_courses.tz_id')
        ->join('user_registers','user_sub_tzs.user_id','=','user_registers.member_id')
        ->get();

        $sub_tz_count = DB::table('user_sub_tzs')
        ->where('tz_sub_status','=','0')->get();
        $tz_count = $sub_tz_count->count();

        $sub_drives_count = DB::table('user_sub_drivings')
        ->where('sub_status','=','0')->get();
        $drives_count = $sub_drives_count->count();

        $sub_drone_count = DB::table('user_sub_drones')
        ->where('sub_status','=','0')->get();
        $drone_count = $sub_drone_count->count();

        return view('admin.dashboard', compact('user_sub_driv','user_sub_drone','user_sub_tzs','tz_count','drives_count','drone_count'));
    }

    public function admin_update_status_driving(Request $request)
    {
        $id = $request->id;
        DB::table('user_sub_drivings')
        ->where('req_id','=',$id)
        ->update([
            'sub_status' => $request->status_update,
            'admin_remark' => $request->admin_remark,
            'updated_at' => Carbon::now()
        ]);

        return redirect()->route('admin.dashboard')->with('success', "บันทึกข้อมูลเรียบร้อยแล้ว");
    }

    public function admin_update_status_tz(Request $request)
    {
        $id = $request->id;
        DB::table('user_sub_tzs')
        ->where('req_id','=',$id)
        ->update([
            'tz_sub_status' => $request->status_update,
            'admin_remark' => $request->admin_remark,
            'updated_at' => Carbon::now()
        ]);

        return redirect()->route('admin.dashboard')->with('success', "บันทึกข้อมูลเรียบร้อยแล้ว");
    }



}
