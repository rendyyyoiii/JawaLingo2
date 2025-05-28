<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model {
    use HasFactory;

    protected $fillable = ['text', 'correct_answer', 'chapter_id'];

    public function chapter() {
        return $this->belongsTo(Chapter::class);
    }

    public function choices() {
        return $this->hasMany(Choice::class);
    }
}
