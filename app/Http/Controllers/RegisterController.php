<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class RegisterController extends Controller
{
    public function consent()
    {
        
        return view('home.consent');
    }
}
