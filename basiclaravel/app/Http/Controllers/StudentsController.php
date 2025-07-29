<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;

class StudentsController extends Controller
{
    public function add(){
        Students::create([
            'name' => 'Kyle',
            'email' => 'kyle@gmail.com',
            'age' => 20,
            'contact_no' => '09123456789',
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
