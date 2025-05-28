<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChoicesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('choices')->insert([
            ['question_id' => 1, 'text' => 'Sugeng Injing'], // Jawaban benar
            ['question_id' => 1, 'text' => 'Sugeng dalu'],
            ['question_id' => 1, 'text' => 'Sugeng siang'],
            ['question_id' => 1, 'text' => 'sugeng sonten'],
            // Tambahkan pilihan untuk soal lainnya di sini
        ]);
    }
}