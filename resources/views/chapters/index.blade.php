<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapters - Jawalingo</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body style="background-color: #f5f3e5; font-family: 'Arial', sans-serif;">
    <div style="text-align: center; padding: 50px;">
        <h1 style="color: #7b5b40;">Chapter - Level Mudah</h1>
        <div style="display: flex; justify-content: center; flex-wrap: wrap;">
            @foreach($chapters as $chapter)
                <div class="chapter-card" style="margin: 10px; padding: 20px; background-color: #ffffff; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                    <h2>Chapter {{ $chapter->id }}</h2>
                    <a href="{{ route('quiz.show', $chapter->id) }}" class="chapter-button" style="background-color: #6ab04c;">Mulai</a>
                </div>
            @endforeach
        </div>
        <a href="{{ route('dashboard') }}" style="margin-top: 20px; display: inline-block; text-decoration: underline;">Kembali ke Dashboard</a>
    </div>
</body>
</html>