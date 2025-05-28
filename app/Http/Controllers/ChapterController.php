<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use Illuminate\Http\Request;

class ChapterController extends Controller {
    public function index($level_id) {
        $chapters = Chapter::where('level_id', $level_id)->get(); // Mengambil chapter berdasarkan level
        return view('chapters.index', compact('chapters', 'level_id'));
    }
}
