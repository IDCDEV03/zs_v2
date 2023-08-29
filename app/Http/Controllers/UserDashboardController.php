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

class UserDashboardController extends Controller
{

    public function LineAlert($msg)
    {
  
      $sToken = "kgt4Dwhi2UT6SaHuJMUfYsw1wa32Z9UagwppAaEgThT";
      $sMessage = $msg; 
      
      $chOne = curl_init(); 
      curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify"); 
      curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0); 
      curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0); 
      curl_setopt( $chOne, CURLOPT_POST, 1); 
      curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=".$sMessage); 
      $headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$sToken.'', );
      curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers); 
      curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1); 
      $result = curl_exec( $chOne ); 
    }

    public function products_driver()
    {
        $branch = DB::table('idd_branches')
        ->join('idd_branch_imgs','idd_branches.branch_id','=','idd_branch_imgs.branch_id')
        ->get();
        return view('home.products_dl',compact('branch'));
    }

    public function dl_detail($id)
    {
        $branch_detail = DB::table('idd_branches')
        ->where('idd_branches.branch_id','=',$id)
        ->get();
        $branch_type = DB::table('driving_license_types')
        ->join('driving_license_imgs','driving_license_types.dl_type','=','driving_license_imgs.dl_type')
        ->where('driving_license_types.dl_branch','=',$id)
        ->groupBy('driving_license_types.dl_type')
        ->get();
        return view('home.dl_detail',compact('branch_detail','branch_type'));
    }

    public function dl_type($type,$branch)
    {
        $dl_type = DB::table('driving_license_lists')     
        ->where('driving_license_lists.dl_type','=',$type)
        ->get();
        return view('home.driving_type',['type' => $type,'branch'=>$branch], compact('dl_type'));
    }

    public function drone_page()
    {
        $drone_list = DB::table('idd_drones')
        ->where('drone_active','=','1')
        ->get();

        $drone_sale = DB::table('idd_drone_sales')
        ->get();
        return view('home.product_drone',compact('drone_list','drone_sale'));
    }

    public function drone_detail($id)
    {
        $drone_detail = DB::table('idd_drones')
        ->where('drone_id','=',$id)
        ->where('drone_active','=','1')
        ->get();
        return view('home.drone_detail',['id' => $id],compact('drone_detail'));
    }

    public function drone_agras($id)
    {
        $drone_agras = DB::table('idd_drone_sales')
        ->where('d_id','=',$id)
        ->get();
        return view('home.drone_agras',['id' => $id],compact('drone_agras'));
    }


    public function drone_sub(Request $request)
    {  
        DB::table('user_sub_drones')->insert([
            'user_id' => $request->member_id,
            'drone_id' => $request->drone_id,
            'sub_status' => '0',
            'user_phone' => $request->user_phone,
            'user_timing' => $request->user_timing,
            'user_chk' => $request->user_chk,
            'created_at' => Carbon::now()
        ]);

         //Line_Alert
        $msg_alrert = "มีการลงทะเบียนความสนใจหลักสูตรโดรน";
        $this->LineAlert($msg_alrert);

        return redirect()->route('home.drone')->with('success', "บันทึกความสนใจของท่านเรียบร้อยแล้ว");
    }

    public function driving_sub(Request $request)
    {  
        DB::table('user_sub_drivings')->insert([
            'user_id' => $request->member_id,
            'branch_id' => $request->dl_branch,
            'dl_type' => $request->dl_type,
            'sub_status' => '0',
            'user_phone' => $request->user_phone,
            'user_timing' => $request->user_timing,
            'user_chk' => $request->user_chk,
            'created_at' => Carbon::now()
        ]);

        $msg_alrert = "มีการลงทะเบียนความสนใจเรียนขับรถ";
        $this->LineAlert($msg_alrert);

        return redirect()->route('home.sub_status')->with('success', "บันทึกความสนใจของท่านเรียบร้อยแล้ว");
    }

    public function tz_detail($id)
    {
        $tz_detail = DB::table('tz_courses')
        ->where('tz_id','=', $id)
        ->get();
        return view('home.tz_detail',['id' => $id],compact('tz_detail'));
    }

  
}
