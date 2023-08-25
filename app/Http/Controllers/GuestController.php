<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function guest_products()
    {
        return view('guest.id_products');
    }

    public function guest_social()
    {
        return view('guest.social');
    }
}
