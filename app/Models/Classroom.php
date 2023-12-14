<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

    protected $fillable = [
        'capacity',
        'room_type',
        'room_num',
        'floor_level'
    ];

    public function loads(){
        return $this->hasMany(Loader::class);
    }

    public static function list(){
        $classrooms = Classroom::orderByRaw('room_type')->get();
        $list = [];
        
        foreach($classrooms as $classroom){
            $list[$classroom->id] = $classroom->room_type;
        }

        return $list;
    }
    
}
