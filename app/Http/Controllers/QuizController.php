<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Score;
use Illuminate\Http\Request;

class QuizController extends Controller {
    public function show($chapter_id) {
        $question = Question::where('chapter_id', $chapter_id)->first(); // Mengambil soal dari chapter
        return view('quiz.show', compact('question'));
    }

    public function submitAnswer(Request $request, $chapter_id) {
        $validated = $request->validate(['answer' => 'required|exists:choices,id']);

        $question = Question::where('chapter_id', $chapter_id)->first();
        
        // Simpan hasil untuk tujuan winrate
        $score = Score::firstOrCreate(
            ['user_id' => auth()->id(), 'level_id' => $question->chapter->level_id],
            ['correct_answers' => 0, 'total_questions' => 0]
        );

        // Cek jawaban
        if ($validated['answer'] == $question->correct_answer) {
            $score->increment('correct_answers');
        }
        $score->increment('total_questions');

        $isCorrect = ($validated['answer'] == $question->correct_answer);
        
        return view('quiz.result', compact('isCorrect', 'question', 'chapter_id'));
    }

    public function results($level_id) {
        $score = Score::where('user_id', auth()->id())->where('level_id', $level_id)->first();
        return view('quiz.results', compact('score'));
    }
}
