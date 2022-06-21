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
            'instructie-nl' => 'sqaut sqaut/<br>sqaut',
            'instructie-en' => 'sqaut sqaut/<br>sqaut',
        ]);
        DB::table('oefeningen')->insert([
            'Name' => 'push up',
            'instructie-nl' => 'push up push up/<br>push up',
            'instructie-en' => 'push up push up/<br>push up',
        ]);
    }
}
