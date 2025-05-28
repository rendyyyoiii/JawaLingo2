<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekap Skor - Jawalingo</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Rekap Skor</h1>
    <p>Jumlah Jawaban Benar: {{ $score->correct_answers }}</p>
    <p>Jumlah Total Soal: {{ $score->total_questions }}</p>
    <p>Winrate: {{ $score->total_questions > 0 ? number_format(($score->correct_answers / $score->total_questions) * 100, 2) : 0 }}%</p>
    <a href="{{ route('dashboard') }}">Kembali ke Dashboard</a>
</body>
</html>