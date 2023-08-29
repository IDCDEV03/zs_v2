<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{
    public function branch_list()
    {
        $dl_list = DB::table('idd_branches')
        ->get();
        return view('admin.branch_list', compact('dl_list'));
    }

    public function dl_course()
    {
        $dl_type = DB::table('driving_license_types')
        ->rightjoin('driving_license_lists','driving_license_types.dl_type','=','driving_license_lists.dl_type')
        ->groupBy('driving_license_types.dl_type')
        ->get();
        return view('admin.dl_course', compact('dl_type'));
    }

    public function dl_course_edit($id)    
    {      
        $dl_types = DB::table('driving_license_lists')
        ->join('driving_license_imgs','driving_license_lists.dl_code','=','driving_license_imgs.dl_code')
        ->where('driving_license_lists.dl_type','=',$id)
        ->get();

        $dl_branch = DB::table('idd_branches')
        ->join('driving_license_types','idd_branches.branch_id','=','driving_license_types.dl_branch')
        ->where('driving_license_types.dl_type','=',$id)
        ->groupBy('idd_branches.branch_id')
        ->orderBy('idd_branches.id','asc')
        ->get();

        $dl_all_branch = DB::table('driving_license_types')
        ->select('dl_branch')->where('dl_type','=',$id);

        $dl_branch_notin = DB::table('idd_branches')
        ->whereNotIn('idd_branches.branch_id', $dl_all_branch)
        ->groupBy('idd_branches.branch_id')
        ->orderBy('idd_branches.id','asc')
        ->get();

        return view('admin.dl_course_edit', ['id' => $id],compact('dl_types','dl_branch','dl_branch_notin'));
    }

    public function dl_course_update(Request $request)
    {
        $dl_code = $request->dl_code;
        DB::table('driving_license_lists')
        ->where('dl_code','=',$dl_code)
        ->update([
            'dl_course_name' => $request->dl_course_name,
            'dl_detail' => $request->dl_detail,
            'dl_other' => $request->dl_other,
            'dl_price' => $request->dl_price,
            'updated_at' => Carbon::now()
        ]);
        return redirect()->route('admin.dl_course')->with('success', "บันทึกข้อมูลเรียบร้อยแล้ว");
    }

    public function branch_edit($id)
    {
        $b_edit = DB::table('idd_branches')
        ->where('branch_id','=',$id)
        ->get();
        return view('admin.branch_edit', ['id' => $id],compact('b_edit'));
    }

    public function branch_update(Request $request)
    {
        $branch_id = $request->b_id;
        DB::table('idd_branches')
        ->where('branch_id','=',$branch_id)
        ->update([
            'branch_province' => $request->b_province,
            'branch_name' => $request->b_name,
            'branch_address' => $request->b_address,
            'branch_fb' => $request->b_fb,
            'branch_phone' => $request->b_phone,
            'branch_email' => $request->b_email,
            'branch_other' => $request->b_other,
            'updated_at' => Carbon::now()
        ]);
        return redirect()->route('admin.branch_list')->with('success', "บันทึกการแก้ไขเรียบร้อยแล้ว");    
    }

    public function drone_list()
    {
        $drone_list = DB::table('idd_drones')
        ->where('drone_active','=','1')
        ->get();
        return view('admin.drone_list',compact('drone_list'));
    }

    public function del_branch($id)
    {
        $del_branch = DB::table('driving_license_types')
        ->where('id','=',$id)
        ->delete();
        return redirect()->route('admin.dl_course')->with('success', "บันทึกการแก้ไขเรียบร้อยแล้ว");
    }

    public function add_branch(Request $request)
    {
      $type = $request->dl_type;
      if ($type == 'T1'){
           $dl_name = 'รถจักรยานยนต์';
        }
       elseif($type == 'T2'){
            $dl_name = 'รถยนต์ไม่มีพื้นฐาน';
       }
       elseif($type == 'T3'){
             $dl_name = 'รถยนต์มีพื้นฐาน';
       }
       elseif($type == 'T4'){
             $dl_name = 'รถบรรทุก ท.2';
       }
        DB::table('driving_license_types')
        ->insert([
            'dl_type' => $request->dl_type,
            'dl_name' => $dl_name,
            'dl_branch' => $request->dl_branch,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return redirect()->route('admin.dl_course')->with('success', "บันทึกการแก้ไขเรียบร้อยแล้ว");
    }

    /** TZ Function */

    public function tz_edit($id)
    {
        $tz_edit = DB::table('tz_courses')
        ->where('tz_id','=',$id)
        ->get();
        return view('admin.tz_course_edit', ['id' => $id],compact('tz_edit'));
    }

    public function tz_update(Request $request)
    {
        $tz_id = $request->tz_id;
        DB::table('tz_courses')
        ->where('tz_id','=',$tz_id)
        ->update([
            'tz_name' => $request->tz_name,
            'tz_fullname' => $request->tz_fullname,            
            'tz_theory' => $request->tz_theory,
            'tz_practical' => $request->tz_practical,
            'tz_price' => $request->tz_price,
            'tz_status' => $request->tz_status,
            'tz_other' => $request->tz_other,
            'updated_at' => Carbon::now()
        ]);
        return redirect()->route('admin.tz_course')->with('success', "บันทึกการแก้ไขเรียบร้อยแล้ว");
    }

}
