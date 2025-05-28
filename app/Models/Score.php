<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model {
    use HasFactory;

    protected $fillable = ['user_id', 'level_id', 'correct_answers', 'total_questions'];

    public function user() {
        return $this->belongsTo(User::class); // Jika menggunakan model User
    }

    public function level() {
        return $this->belongsTo(Level::class);
    }
}