<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home_index()
    {
        return view('home.index');
    }

    public function information()
    {
        return view('home.information');
    }
    public function information2()
    {
        return view('home.information_part2');
    }
    public function information3()
    {
        return view('home.information_part3');
    }
    public function information4()
    {
        return view('home.information_part4');
    }
}

