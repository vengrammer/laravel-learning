<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function user($name){
        return view('Testing', compact('name'));
    }
}
