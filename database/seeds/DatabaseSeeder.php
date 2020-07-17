<?php

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
        $this->call(BranchSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        //$this->call(RoleUserSeeder::class);
        $this->call(EventTypeSeeder::class);
        // Fake
        $this->call(EventSeeder::class);
    }
}
