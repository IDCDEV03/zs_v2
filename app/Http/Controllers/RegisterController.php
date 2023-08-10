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

class RegisterController extends Controller
{
    public function consent()
    {        
        return view('home.consent');
    }

    public function consent_save(Request $request)
    {
        DB::table('consent_chks')->insert([
            'consent_token' => $request->consent_token,
            'member_id' => $request->id,
            'consent_chk' => $request->consent_chk,
            'created_at' => Carbon::now()
        ]);
        return redirect()->route('home.information',['id' => $request->id]);
    }
}
