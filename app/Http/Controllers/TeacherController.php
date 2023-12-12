<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //

    public function index() {
        $teach = Teacher::orderBy('id')->get();

        return view('teachers.teachers', ['teachers' => $teach]);
    }

    public function create() {
        return view('teachers.create');
    }

    public function store(Request $request){
        $request -> validate([
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'phone' => 'required',
            'department' => 'required'
        ]);

        Teacher::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
            'department' => $request->department,
        ]);

        return redirect('/teachers')->with('message', 'A new teacher has been added.');
    }

    public function edit(Teacher $teacher){

        return view('teachers.edit', compact('teacher'));
    }

    public function update(Request $request, Teacher $teacher){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'phone' => 'required',
            'department' => 'required'
        ]);

        $teacher->update($request->all());

        return redirect('/teachers')->with('message', 'Teacher has been updated successfully.');
    }

    public function destroy(Teacher $teacher){
        $teacher->delete();

        return redirect('/teachers')->with('message', 'Teacher has been deleted successfully.');
    }
}
