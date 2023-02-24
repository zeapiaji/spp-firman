<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class student extends Model
{
    use HasFactory, HasRoles;

    protected $guarded = [
        'id'
    ];

    public function ClassModel()
    {
        return $this->belongsTo(ClassModel::class, 'class_id');
    }

    public function SchoolFee()
    {
        return $this->belongsTo(SchoolFee::class);  
    }

    public function UserMonth()
    {
        return $this->hasMany(UserMonth::class);
    }
}
