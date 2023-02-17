<?php

namespace Database\Seeders;

use App\Models\clasModel;
use App\Models\ClassModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClassModel::create([
            'class_name'    =>  'VII - A',
        ]);
        ClassModel::create([
            'class_name'    =>  'VII - B',
        ]);
        ClassModel::create([
            'class_name'    =>  'VIII - A',
        ]);
        ClassModel::create([
            'class_name'    =>  'VIII - B',
        ]);
        ClassModel::create([
            'class_name'    =>  'IX - A',
        ]);
        ClassModel::create([
            'class_name'    =>  'IX - B',
        ]);
    }
}
