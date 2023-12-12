<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function semesters(){
        return $this->hasMany(Semester::class);
    }

    protected $fillable = [
        'name',
        'address',
        'email',
        'phone',
        'birthdate',
        'year_level'
    ];

    public static function list(){
        $students = Student::orderByRaw('name')->get();
        $list = [];
        
        foreach($students as $student){
            $list[$student->id] = $student->name;
        }

        return $list;
    }
}
