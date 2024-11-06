<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class makeBookingController extends Controller
{
    public function index(){
        return view('pages.makebooking');
    }
}
