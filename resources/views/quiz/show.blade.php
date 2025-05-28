<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal - Jawalingo</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body style="background-color: #f5f3e5; font-family: 'Arial', sans-serif;">
    <div style="padding: 50px; text-align: center;">
        <h1 style="color: #7b5b40;">Soal Chapter {{ $question->chapter_id }}</h1>
        <h2>{{ $question->text }}</h2>

        <form action="{{ route('quiz.submit', $question->chapter_id) }}" method="POST">
            @csrf
            <div style="display: flex; flex-direction: column; align-items: center;">
                @foreach($question->choices as $choice)
                    <div style="margin: 10px;">
                        <input type="radio" name="answer" value="{{ $choice->id }}" required>
                        <label>{{ $choice->text }}</label>
                    </div>
                @endforeach
                <button type="submit" style="margin-top: 20px; background-color: #6ab04c; padding: 10px 20px; color: white; border: none; border-radius: 5px;">Kirim Jawaban</button>
            </div>
        </form>
    </div>
</body>
</html>