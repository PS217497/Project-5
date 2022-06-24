<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\models\oefeningen;

class oefeningenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('oefeningen')->insert([
            'Name' => 'sqaut',
            'instructie_nl' => 'sqaut sqaut/<br>sqaut',
            'instructie_en' => 'sqaut sqaut/<br>sqaut',
        ]);
        DB::table('oefeningen')->insert([
            'Name' => 'push up',
            'instructie_nl' => 'push up push up/<br>push up',
            'instructie_en' => 'push up push up/<br>push up',
        ]);
    }
}
