<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil - Jawalingo</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Hasil Jawaban</h1>
        <div class="result-card">
            <h2>{{ $question->chapter->level->name }}</h2>
            @if($isCorrect)
                <h3>Selamat, jawaban Anda benar!</h3>
                <p><a href="{{ route('quiz.show', $chapter_id + 1) }}">Lanjutkan ke Chapter Selanjutnya</a></p>
            @else
                <h3>Jawaban Anda salah.</h3>
                <p><a href="{{ route('quiz.show', $chapter_id) }}">Coba Lagi</a></p>
            @endif
            <p><a href="{{ route('chapters.index', $question->chapter->level_id) }}">Kembali ke Menu Utama Chapter</a></p>
        </div>
    </div>
</body>
</html>