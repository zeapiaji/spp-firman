<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';

    protected $fillable = [
        'officer_id',
        'student_id',
        'school_fees_id',
        'user_month_id',
    ];
}
