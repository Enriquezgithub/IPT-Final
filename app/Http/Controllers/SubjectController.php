<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use Mockery\Matcher\Subset;

class SubjectController extends Controller
{
    public function index() {
        $sub = Subject::orderBy('id')->get();

        return view('subjects.subjects', ['subjects' => $sub]);
    }

    public function create() {
        return view('subjects.create');
    }

    public function store(Request $request){
        $request -> validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        Subject::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect('/subjects')->with('message', 'A new subject has been added.');
    }

    public function edit(Subject $subject){

        return view('subjects.edit', compact('subject'));
    }

    public function update(Request $request, Subject $subject){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $subject->update($request->all());

        return redirect('/subjects')->with('message', 'Subject has been updated successfully.');
    }

    public function destroy(Subject $subject){
        $subject->delete();

        return redirect('/subjects')->with('message', 'Subject has been deleted successfully.');
    }
}
