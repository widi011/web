<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NatureController extends Controller
{
    public function index(){
        return view('v_nature');
    }
}
