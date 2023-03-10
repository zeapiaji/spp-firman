<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\UserMonth;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(ClassSeeder::class);
        $this->call(StudentSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(OfficerSeeder::class);
        $this->call(SchoolFeeSeeder::class);
        $this->call(MonthSeeder::class);
        $this->call(UserMonthSeeder::class);

    }
}
