<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\user_register;
use Illuminate\Support\Str;
use App\Models\consent_chk;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function consent()
    {        
        $member_id = substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 8);
        $user_id = Session::put('member_id', $member_id);
        return view('home.consent',['id' => $member_id]);
    }

    public function consent_save(Request $request)
    {
        DB::table('consent_chks')->insert([
            'consent_token' => $request->_token,
            'member_id' => $request->id,
            'consent_chk' => $request->consent_chk,
            'created_at' => Carbon::now()
        ]);
        return redirect()->route('home.information',['id' => $request->id]);
    }
}
