<?php

namespace Database\Seeders;

use App\Models\SchoolFee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchoolFeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SchoolFee::create([
            'school_year'   =>  '2018',
            'price'         =>  '150000'
        ]);
        SchoolFee::create([
            'school_year'   =>  '2020',
            'price'         =>  '170000'
        ]);
    }
}
