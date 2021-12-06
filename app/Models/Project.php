<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function messages(){
        return $this->hasMany(Message::class);
    }

    public function toDoEs(){
        return $this->hasMany(Todo::class);
    }
}
