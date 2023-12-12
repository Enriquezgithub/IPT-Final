<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'address',
        'phone',
        'department'
    ];

    public function loads(){
        return $this->hasMany(Load::class);
    }


    public static function list(){
        $teachers = Teacher::orderByRaw('name')->get();
        $list = [];
        
        foreach($teachers as $teacher){
            $list[$teacher->id] = $teacher->name;
        }

        return $list;
    }
}
