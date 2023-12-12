<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index() {
        $stud = Student::orderBy('id')->get();

        return view('students.students', ['students' => $stud]);
    }

    public function create(){
        return view('students.create');
    }

    public function edit(Student $student){

        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student){
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'birthdate' => 'required',
            'year_level' => 'required',
        ]);

        $student->update($request->all());

        return redirect('/students')->with('message', 'Student has been updated successfully.');
    }

    public function destroy(Student $student)   {
      
        $student->delete();

        return redirect('/students')->with('message', 'Student deleted successfully');
    }

    public function store(Request $request){
        $request -> validate([
            'name' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'birthdate' => 'required',
            'year_level' => 'required'
        ]);

        Student::create([
            'name' => $request->name,
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
            'birthdate' => $request->birthdate,
            'year_level' => $request->year_level 
        ]);

        return redirect('/students')->with('message', 'A new student has been added.');
    }
}
