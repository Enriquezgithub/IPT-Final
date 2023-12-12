<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function index() {
        $room = Classroom::orderBy('id')->get();

        return view('classrooms.classrooms', ['classrooms' => $room]);
    }

    public function create() {
        return view('classrooms.create');
    }

    public function store(Request $request){
        $request -> validate([
            'capacity' => 'required',
            'room_type' => 'required',
            'room_num' => 'required',
            'floor_level' => 'required'
        ]);

        Classroom::create([
            'capacity' => $request->capacity,
            'room_type' => $request->room_type,
            'room_num' => $request->room_num,
            'floor_level' => $request->floor_level
        ]);

        return redirect('/classrooms')->with('message', 'A new classroom has been added.');
    }

    public function edit(Classroom $classroom){

        return view('classrooms.edit', compact('classroom'));
    }

    public function update(Request $request, Classroom $classroom){
        $request->validate([
            'capacity' => 'required',
            'room_type' => 'required',
            'room_num' => 'required',
            'floor_level' => 'required'
        ]);

        $classroom->update($request->all());

        return redirect('/classrooms')->with('message', 'Classroom has been updated successfully.');
    }

    public function destroy(Classroom $classroom){
        $classroom->delete();

        return redirect('/classrooms')->with('message', 'Classroom has been deleted successfully.');
    }
}
