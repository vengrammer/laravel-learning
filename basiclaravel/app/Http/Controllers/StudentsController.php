<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;

class StudentsController extends Controller
{
    public function add(Request $request){
        Students::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'age' => $request->input('age'),
            'contact_no' => $request->input('contact_no'),
        ]);
        return Students::all();
    }

    public function show(){
        $students = Students::paginate(2);
        return $students;
    }

    public function update(){
        $students = Students::findOrFail(3);
        $students->update([
            'email' => 'updatedAgain@gmail.com'
        ]);

        return $students;
    }

    public function del(){
        $students = Students::findOrFail(3);
        $students->delete();

        return Students::all();
    }

    public function count(){
        $students = Students::count();
        return $students;
    }

    public function findingOrCreating(){
        Students::firstOrCreate([
            'name' => 'Juan Dela Cruz'
        ]);
    }
}
