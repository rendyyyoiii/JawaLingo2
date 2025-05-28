<!-- resources/views/quiz/result.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil - Jawalingo</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Hasil Jawaban</h1>
    @if($isCorrect)
        <h2>Selamat, jawaban Anda benar!</h2>
        <p><a href="{{ route('quiz.show', $chapter_id + 1) }}">Lanjutkan ke Chapter Selanjutnya</a></p>
    @else
        <h2>Jawaban Anda salah.</h2>
        <p><a href="{{ route('quiz.show', $chapter_id) }}">Coba Lagi</a></p>
    @endif
    <p><a href="{{ route('chapters.index', $question->chapter->level_id) }}">Kembali ke Menu Utama Chapter</a></p>
</body>
</html>