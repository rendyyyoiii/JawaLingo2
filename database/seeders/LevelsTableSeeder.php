<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('levels')->insert([
            ['level_name' => 'Mudah'],
            ['level_name' => 'Sedang'],
            ['level_name' => 'Sulit'],
        ]);
    }
}