<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loader extends Model
{
    use HasFactory;

    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }

    public function subject(){
        return $this->belongsTo(Subject::class);
    }

    public function classroom(){
        return $this->belongsTo(Classroom::class);
    }

    public function semesters(){
        return $this->hasMany(Semester::class);
    }

    protected $fillable = [
        'subject_id',
        'classroom_id',
        'time',
        'day',
        'teacher_id'
    ];

    public static function list(){
        $loads = Loader::orderByRaw('id')->get();
        $list = [];
        
        foreach($loads as $load){
            $list[$load->id] = $load->id;
        }

        return $list;
    }

}
