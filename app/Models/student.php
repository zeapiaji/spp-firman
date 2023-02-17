<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function ClassModel()
    {
        return $this->belongsTo(ClassModel::class, 'class_id');
    }
}
