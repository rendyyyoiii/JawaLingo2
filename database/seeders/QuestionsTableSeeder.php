<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('questions')->insert([
            [
                'chapter_id' => 1,
                'text' => 'Bahasa Krama Selamat Pagi',
                'correct_answer' => 1, // ID dari pilihan jawaban yang benar
            ],
            // Tambahkan soal lain di sini
        ]);
    }
}
