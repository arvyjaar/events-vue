<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $event_titles = ['Mokymai apie bites', 'Mokymai apie Mėnulį'];
        foreach($event_titles as $title) {
            DB::table('events')->insert([
                'title' => $title,
                'description' => 'asdf fasff aswrfafa asfafa affasfSF',
                'event_type_id' => 1,
                'created_at' => '2000-01-01 00:00:00',
                'updated_at' => '2000-01-01 00:00:00',
                'deleted_at' => null,
            ]);
        }

        $event_locations = ['Kauno aikštelė', 'Vilniaus aikštelė', 'Klaipėdos aikštelė'];

        foreach($event_locations as $location) {
            DB::table('locations')->insert([
                'title' => $location,
                'address' => $faker->streetAddress,
                'event_id' => rand(1, 2),
                'created_at' => '2000-01-01 00:00:00',
                'updated_at' => '2000-01-01 00:00:00',
                'deleted_at' => null,
            ]);
        }

        foreach (range(1, 10) as $index) {
            DB::table('event_dates')->insert([
                'datetime' => $faker->dateTimeBetween('now', '+12 months'),
                'seats' => 3,
                'location_id' => rand(1,3),
                'created_at' => '2000-01-01 00:00:00',
                'updated_at' => '2000-01-01 00:00:00',
                'deleted_at' => null,
            ]);
        }
    }
}
