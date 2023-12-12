<?php

use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\LoadController;
use App\Http\Controllers\LoaderController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [SiteController::class, 'index']);

//student
Route::get('/students', [StudentController::class, 'index'])->name('students');
Route::get('/students/create', [StudentController::class, 'create']);
Route::post('/students/create',[StudentController::class, 'store'])->name('students');
Route::get('/students/{student}', [StudentController::class, 'edit'])->name('students');
Route::patch('/students/{student}', [StudentController::class, 'update'])->name('students');
Route::delete('/students/delete/{student}', [StudentController::class, 'destroy'])->name('students');


//teachers
Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers');
Route::get('/teachers/create', [TeacherController::class, 'create'])->name('teachers');
Route::post('/teachers/create',[TeacherController::class, 'store'])->name('teachers');
Route::get('/teachers/{teacher}', [TeacherController::class, 'edit'])->name('teachers');
Route::patch('/teachers/{teacher}', [TeacherController::class, 'update'])->name('teachers');
Route::delete('/teachers/delete/{teacher}', [TeacherController::class, 'destroy'])->name('teachers');


//classroom
Route::get('/classrooms', [ClassroomController::class, 'index'])->name('classrooms');
Route::get('/classrooms/create', [ClassroomController::class, 'create'])->name('classrooms');
Route::post('/classrooms/create',[ClassroomController::class, 'store'])->name('classrooms');
Route::get('/classrooms/{classroom}', [ClassroomController::class, 'edit'])->name('classrooms');
Route::patch('/classrooms/{classroom}', [ClassroomController::class, 'update'])->name('classrooms');
Route::delete('/classrooms/delete/{classroom}', [ClassroomController::class, 'destroy'])->name('classrooms');


//subject
Route::get('/subjects', [SubjectController::class, 'index'])->name('subjects');
Route::get('/subjects/create', [SubjectController::class, 'create'])->name('subjects');
Route::post('/subjects/create',[SubjectController::class, 'store'])->name('subjects');
Route::get('/subjects/{subject}', [SubjectController::class, 'edit'])->name('subjects');
Route::patch('/subjects/{subject}', [SubjectController::class, 'update'])->name('subjects');
Route::delete('/subjects/delete/{subject}', [SubjectController::class, 'destroy'])->name('subjects');


//load
Route::get('/loads', [LoaderController::class, 'index'])->name('loads');
Route::get('/loads/create', [LoaderController::class, 'create'])->name('loads');
Route::post('/loads/create',[LoaderController::class, 'store'])->name('loads');
Route::get('/loads/{load}', [LoaderController::class, 'edit'])->name('loads');
Route::patch('/loads/{load}', [LoaderController::class, 'update'])->name('loads');
Route::delete('/loads/delete/{load}', [LoaderController::class, 'destroy'])->name('loads');


//semester class
Route::get('/semesters', [SemesterController::class, 'index'])->name('semesters');
Route::get('/semesters/create', [SemesterController::class, 'create'])->name('semesters');
Route::post('/semesters/create',[SemesterController::class, 'store'])->name('semesters');
Route::get('/semesters/{semester}', [SemesterController::class, 'edit'])->name('semesters');
Route::patch('/semesters/{semester}', [SemesterController::class, 'update'])->name('semesters');
Route::delete('/semesters/delete/{semester}', [SemesterController::class, 'destroy'])->name('semesters');