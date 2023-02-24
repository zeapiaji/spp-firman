<?php

namespace Database\Seeders;

use App\Models\student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student = student::create([
            'nisn'          => '02020988',
            'nis'           => '23424524',
            'name'          => 'Ahmad Dahuli',
            'email'         => 'amad@dahuli.com',
            'password'      => Hash::make('123123123'),
            'class_id'      =>  '1',
            'school_fee_id' =>  1,
            'address'       => 'Kp Arab Lokal',
            'phone_number'  =>  '0892838'
        ]);

        // $student->assignRole('student');

        student::create([
            'nisn'          => '02020989',
            'nis'           => '23424525',
            'name'          => 'Ucup Dahuli',
            'email'         => 'ucup@dahuli.com',
            'password'      => Hash::make('123123123'),
            'class_id'      =>  '2',
            'school_fee_id' =>  1,
            'address'       => 'Kp Arab Lokal',
            'phone_number'  =>  '0892839'
        ]);
        student::create([
            'nisn'          => '02020990',
            'nis'           => '23424526',
            'name'          => 'Opik Dahuli',
            'email'         => 'opik@dahuli.com',
            'password'      => Hash::make('123123123'),
            'class_id'      =>  '3',
            'school_fee_id' =>  2,
            'address'       => 'Kp Arab Lokal',
            'phone_number'  =>  '0892840'
        ]);
        student::create([
            'nisn'          => '02022290',
            'nis'           => '23422026',
            'name'          => 'Dados Dahuli',
            'email'         => 'dados@dahuli.com',
            'password'      => Hash::make('123123123'),
            'class_id'      =>  '2',
            'school_fee_id' =>  2,
            'address'       => 'Kp Arab Lokal',
            'phone_number'  =>  '0899040'
        ]);
    }
}
