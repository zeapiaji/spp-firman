<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserMonth;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserMonthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserMonth::create([
            'student_id'    =>  2020988,
            'month_id'      =>  1,
            'status'        =>  1,
        ]);
        UserMonth::create([
            'student_id'    =>  2020988,
            'month_id'      =>  2,
            'status'        =>  0,
        ]);
        UserMonth::create([
            'student_id'    =>  2020988,
            'month_id'      =>  3,
            'status'        =>  0,
        ]);
        UserMonth::create([
            'student_id'    =>  2020989,
            'month_id'      =>  4,
            'status'        =>  0,
        ]);
    }
}
