<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class prestatieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prestaties')->insert([
            'datum' => Carbon::now(),
            'time start' => Carbon::now(),
            'time stop' => Carbon::now(),
            'user_id' => '1',
            'oefening_id'=>'1',
            'aantal'=>'5',
        ]);
    }
}
