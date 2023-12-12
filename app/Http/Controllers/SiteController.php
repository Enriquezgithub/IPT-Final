<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function index(){
        return view('page.index');
    }

    public function student() {
        return view('students.students');
    }

    public function teacher() {
        return view('teachers.teachers');
    }

    public function classroom() {
        return view('classrooms.classrooms');
    }

    public function subject() {
        return view('subjects.subjects');
    }

    
    public function load() {
        return view('loads.loads');
    }
}
