<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    use HasFactory;


    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function loader(){
        return $this->belongsTo(Loader::class);
    }



    protected $fillable = [
        'student_id',
        'loader_id'
    ];
}
