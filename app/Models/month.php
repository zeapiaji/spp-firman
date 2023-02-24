<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class month extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function UserMonth()
    {
        return $this->hasMany(UserMonth::class);
    }
}
