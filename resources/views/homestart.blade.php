<!-- resources/views/pages/home.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swaraj: Flames of Rebellion</title>
    <!-- Example: Link a CSS file -->
    <!-- If using Laravel Vite, you might do: @vite(['resources/css/app.css']) -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>

    <div class="game-background">
        <h1 class="game-title">Swaraj: Flames of Rebellion</h1>
        <div class="menu-container">
            <button class="menu-button">New Game</button>
            <button class="menu-button">Continue</button>
            <button class="menu-button">Configure</button>
        </div>
    </div>

    <!-- Example: If you have a background image in public/images/ -->
    <!-- You can set it via CSS in your home.css or inline style, e.g.:
         style="background-image: url('{{ asset('images/market_background.jpg') }}');" -->

    <!-- If you have JavaScript for animations or interactions -->
    <script src="{{ asset('js/home.js') }}"></script>
</body>
</html>
