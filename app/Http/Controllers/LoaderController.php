<?php

namespace App\Http\Controllers;

use App\Models\Classroom;

use App\Models\Loader;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class LoaderController extends Controller
{
    public function index() {
        $lod = Loader::orderBy('id')->get();

        return view('loads.loads', ['loads' => $lod]);
    }

    public function create() {

        $teachers = Teacher::list();
        $subjects = Subject::list();  
        $classrooms = Classroom::list();  
        
        $descriptions = Subject::list1();


        return view('loads.create', ['teachers' => $teachers, 'subjects' => $subjects, 'classrooms' => $classrooms, 'descriptions' => $descriptions]);
    }

    public function store(Request $request){
        $request -> validate([
            'subject_id' => 'required',
            'classroom_id' => 'required',
            'time' => 'required',
            'day' => 'required',
            'teacher_id' => 'required'
        ]);

        Loader::create([
            'subject_id' => $request->subject_id,
            'classroom_id' => $request->classroom_id,
            'time' => $request->time,
            'day' => $request->day,
            'teacher_id' => $request->teacher_id
        ]);

        return redirect('/loads')->with('message', 'A new load has been added.');
    }

    public function edit(Loader $load){

        $teacher = Teacher::all();
        $subject = Subject::all();
        $classroom = Classroom::all();
        $description = Subject::all();

        return view('loads.edit', compact('load','subject','classroom','teacher','description'));
    }

    public function update(Request $request, Loader $load){
        $request->validate([
            'subject_id' => 'required',
            'classroom_id' => 'required',
            'time' => 'required',
            'day' => 'required',
            'teacher_id' => 'required'
        ]);

        $load->update($request->all());

        return redirect('/loads')->with('message', 'Load has been updated successfully.');
    }

    public function destroy(Loader $load){
        $load->delete();

        return redirect('/loads')->with('message', 'Load has been deleted successfully.');
    }
}
