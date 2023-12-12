<?php

namespace App\Http\Controllers;

use App\Models\Load;
use App\Models\Loader;
use App\Models\Semester;
use App\Models\Student;
use Illuminate\Http\Request;

class SemesterController extends Controller
{
    public function index() {
        $sem = Semester::orderBy('id')->get();

        return view('semesters.semesters', ['semesters' => $sem]);
    }

    public function create() {

        $students = Student::list();
        $loads = Loader::list();  

        return view('semesters.create', ['students' => $students, 'loads' => $loads]);
    }

    public function store(Request $request){
        $request -> validate([
            'student_id' => 'required',
            'loader_id' => 'required',
        ]);

        Semester::create([
            'student_id' => $request->student_id,
            'loader_id' => $request->loader_id,
        ]);

        return redirect('/semesters')->with('message', 'A new class has been added.');
    }

    public function edit(Semester $semester){

        $student = Student::all();
        $load = Loader::all();

        return view('semesters.edit', compact('semester', 'student', 'load'));
    }

    public function update(Request $request, Semester $semester){
        $request->validate([
            'student_id' => 'required',
            'loader_id' => 'required',
        ]);

        $semester->update($request->all());

        return redirect('/semesters')->with('message', 'Class has been updated successfully.');
    }

    public function destroy(Semester $semester){
        $semester->delete();

        return redirect('/semesters')->with('message', 'Class has been deleted successfully.');
    }
}
