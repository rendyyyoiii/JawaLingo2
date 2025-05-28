<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Level - Jawalingo</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body style="background-color: #f5f3e5; font-family: 'Arial', sans-serif;">
    <div style="text-align: center; padding: 50px;">
        <h1 style="color: #7b5b40;">Pilih Level</h1>
        <div>
            <a href="{{ route('chapters.index', 1) }}" class="level-button" style="background-color: #6ab04c;">Mudah</a>
            <a href="{{ route('chapters.index', 2) }}" class="level-button" style="background-color: #fbc531;">Sedang</a>
            <a href="{{ route('chapters.index', 3) }}" class="level-button" style="background-color: #e84118;">Sulit</a>
        </div>
    </div>
</body>
</html>