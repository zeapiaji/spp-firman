<?php

namespace Database\Seeders;

use App\Models\month;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MonthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        month::create([
            'month' =>  "January",
        ]);
        month::create([
            'month' =>  "Februari",
        ]);
        month::create([
            'month' =>  "Maret",
        ]);
        month::create([
            'month' =>  "April",
        ]);
        month::create([
            'month' =>  "Mei",
        ]);
        month::create([
            'month' =>  "Juni",
        ]);
        month::create([
            'month' =>  "Juli",
        ]);
        month::create([
            'month' =>  "Agustus",
        ]);
        month::create([
            'month' =>  "September",
        ]);
        month::create([
            'month' =>  "Oktober",
        ]);
        month::create([
            'month' =>  "November",
        ]);
        month::create([
            'month' =>  "Desember",
        ]);
    }
}
