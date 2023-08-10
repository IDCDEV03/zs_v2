<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Services\Login\RememberMeExpiration;

class LoginController extends Controller
{
    use RememberMeExpiration;

    /**
     * Display login page.
     * 
     * @return Renderable
     */

    public function login_show()
    {
        return view('auth.login');
    }

     /**
     * Handle account login request
     * 
     * @param LoginRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function login(LoginRequest $request)
    {
        $credentials = $request->getCredentials();

        if(!Auth::validate($credentials)):
            return redirect()->to('login.show')
                  ->withErrors(trans('auth.failed'));
        endif;

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user, $request->get('remember'));

        if($request->get('remember')):
            $this->setRememberMeExpiration($user);
        endif;

        return $this->authenticated($request, $user);
    }


    /**
     * Handle response after user authenticated
     * 
     * @param Request $request
     * @param Auth $user
     * 
     * @return \Illuminate\Http\Response
     * 
     */
    protected function authenticated(Request $request, $user) 
    {
        if (auth()->check() && auth()->user()->isAdmin == '1')
        {
            return redirect()->intended('/users');
        }elseif(auth()->check() && auth()->user()->isAdmin == '0')
        {
            return redirect()->intended('/');
        }else
        {
            return redirect()->route('login.show')->with('error', 'กรุณาล็อคอินเข้าสู่ระบบ');
        }
    }
}
