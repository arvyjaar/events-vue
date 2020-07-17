<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'name' => 'Napoleon B.',
                'email' => 'admin@admin.com',
                'password' => '$2y$10$L1Q41dc2cPndrFAXTOAf2uB9HIHUiiUcWQ33wZFquII7oCIXXla5W',
                'branch_id' => 1,
                'role_id' => 1,
                'remember_token' => null,
                'created_at' => '2000-01-01 00:00:00',
                'updated_at' => '2000-01-01 00:00:00',
                'deleted_at' => null,
            ],
        ];

        DB::table('users')->insert($users);

        $faker = Faker::create();
        foreach (range(1, 10) as $index) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('password'),
                'branch_id' => rand(1, 3),
                'role_id' => 3,
                'created_at' => '2000-01-01 00:00:00',
                'updated_at' => '2000-01-01 00:00:00',
                'deleted_at' => null,
                'deleted_at' => null,
            ]);
        }
    }
}
