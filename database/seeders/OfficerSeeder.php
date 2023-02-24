<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OfficerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $officer = User::create([
            'id'                    => '1',
            'username'              => 'iman',
            'password'              => Hash::make('123123123'),
            'officers_name'         => 'iman',
            'level'                 =>'2'
        ]);

        $officer->assignRole('officer');
        
        $admin = User::create([
            'id'                    => '2',
            'username'              => 'ucup',
            'password'              => Hash::make('12121212'),
            'officers_name'         => 'yusuf',
            'level'                 =>'1'
        ]);

        $admin->assignRole('admin');

    }
}
