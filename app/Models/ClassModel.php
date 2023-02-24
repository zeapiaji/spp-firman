<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Student()
    {
        return $this->hasMany(student::class);
    }
}   
