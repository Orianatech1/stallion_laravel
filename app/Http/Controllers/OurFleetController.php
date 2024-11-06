<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurFleetController extends Controller
{
    public function index(){
        return view('pages.our-fleet');
    }
}
