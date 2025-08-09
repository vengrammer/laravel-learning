<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function user($name){
        return view('Testing', compact('name'));
    }

    public function try($name, $age,$city){
        return 
        [
            'name' => $name,
            'age' => $age,
            'city' => $city
        ];
    }
}
