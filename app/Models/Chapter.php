<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model {
    use HasFactory;

    protected $fillable = ['title', 'level_id'];

    public function questions() {
        return $this->hasMany(Question::class);
    }

    public function level() {
        return $this->belongsTo(Level::class);
    }
}
//

