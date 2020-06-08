<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $event_types = [
            [
                'title' => 'Periodinis praktinio vairavimo mokymas',
                'description' => 'Pagal direktyvą - 5 dienas per 5 metus',
                'created_at' => '2020-04-05 00:00:00',
                'updated_at' => '2020-04-05 00:00:00',
                'deleted_at' => null,
            ],
            [
                'title' => 'Periodinis egzaminuotojo kompetencijos mokymas',
                'description' => 'Pagal direktyvą - 2 dienas per 2 metus',
                'created_at' => '2020-04-05 00:00:00',
                'updated_at' => '2020-04-05 00:00:00',
                'deleted_at' => null,
            ],

        ];

            DB::table('event_types')->insert($event_types);
    }
}
