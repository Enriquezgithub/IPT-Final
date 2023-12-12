<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    public function loads(){
        return $this->hasMany(Load::class);
    }


    public static function list(){
        $subjects = Subject::orderByRaw('name')->get();
        $list = [];
        
        foreach($subjects as $subject){
            $list[$subject->id] = $subject->name;
        }

        return $list;
    }

    public static function list1(){
        $descriptions = Subject::orderByRaw('description')->get();
        $list1 = [];
        
        foreach($descriptions as $description){
            $list1[$description->id] = $description->description;
        }

        return $list1;
    }
}
