<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $branches = [];
        
        $titles = ['VL', 'KN', 'KL', 'TR', 'SL', 'TL', 'MZ', 'PN', 'UT', 'RK', 'AL', 'MR'];
        
        foreach ($titles as $title) {
            $branches[] = [
                'title'         => $title,
                'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
            ];
        };
        
        DB::table('branches')->insert($branches);   
    }
}
