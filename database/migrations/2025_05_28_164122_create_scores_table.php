<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoresTable extends Migration
{
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Kaitan dengan pengguna (siapa yang menjawab)
            $table->unsignedBigInteger('level_id'); // Kaitan dengan level yang diambil
            $table->integer('correct_answers')->default(0); // Jumlah jawaban benar
            $table->integer('total_questions')->default(0); // Total soal yang diambil
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('scores');
    }
}
