<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            [
                'id' => 1,
                'title' => 'Admin',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'deleted_at' => null,
            ],
            [
                'id' => 2,
                'title' => 'Examiner',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'deleted_at' => null,
            ],
            [
                'id' => 3,
                'title' => 'ExamTeamLead',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'deleted_at' => null,
            ],
        ];

        DB::table('roles')->insert($roles);
    }
}
