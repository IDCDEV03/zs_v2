<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use App\Models\user_register;

class LoginController extends Controller
{
       
        protected $redirectTo = '/logout';

        public function login_show()
        {
            return view('auth.login');
        }

        public function __construct()
        {
            $this->middleware('guest')->except('logout');
        }

        public function login(Request $request)
        {
            $validators=Validator::make($request->all(),[
                'username'=>'required',
                'password'=>'required'
            ]);
            if($validators->fails()){
                return redirect()->route('login.show')->withErrors($validators)->withInput();
            }else{
                if(Auth::attempt(['username'=>$request->username,'password'=>$request->password])){
                    if (auth()->user()->isAdmin == 1) {
                        return redirect()->intended(route('admin.dashboard'));
                    }elseif (auth()->user()->isAdmin == 0) {
                        return redirect()->route('home.dashboard');
                    }else
                    {
                        return redirect()->route('logout');
                    }                   
                }else{
                    return redirect()->route('login.show')->with('message','Login failed !Email/Password is incorrect !');
                }
            }       
        }

        public function logout(){  
            Auth::logout(); 
            return redirect()->route('login.show');       
        }
}
