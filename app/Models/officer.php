<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class officer extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'password',
        'officers_name',
        'level',
    ];

}
