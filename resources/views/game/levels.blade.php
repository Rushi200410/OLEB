<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Game</title>
    <style>
        body {
            margin: 0;
            overflow: hidden;
        }
        .game-container {
            position: relative;
            width: 100vw;
            height: 100vh;
            background: url('{{ asset('images/fountain.jpg') }}') no-repeat center center/cover;
        }
        .character {
            position: absolute;
            width: 80px;
            height: 80px;
            background: url('{{ asset('images/main-character.png') }}') no-repeat center center/contain;
            bottom: 58%; /* Adjusted for the correct house position */
            left: 28%;
            transition: transform 2s linear;
        }
        .visitor {
            position: absolute;
            width: 80px;
            height: 80px;
            background: url('{{ asset('images/side-character.png') }}') no-repeat center center/contain;
            bottom: 0;
            left: 100%;
            cursor: pointer;
            pointer-events: none; /* Initially disable clicks */
        }
        .walking {
            animation: walk 8s linear forwards;
        }
        @keyframes walk {
            0% { left: 100%; bottom: 5%; }
            5% { left: 96%; bottom: 0%; }
            10% { left: 90%; bottom: 2%; }
            20% { left: 80%; bottom: 10%; }
            30% { left: 70%; bottom: 20%; }
            40% { left: 60%; bottom: 30%; }
            50% { left: 60%; bottom: 40%; }
            55% { left: 58%; bottom: 45%; }
            60% { left: 55%; bottom: 50%; }
            65% { left: 52%; bottom: 56%; }
            70% { left: 50%; bottom: 55%; }
            75% { left: 45%; bottom: 54%; }
            80% { left: 43%; bottom: 53%; }
            85% { left: 40%; bottom: 52%; }
            90% { left: 35%; bottom: 51%; }
            100% { left: 30%; bottom: 55%; }
        }
    </style>
</head>
<body>
    <div class="game-container">
        <div class="character" id="mainCharacter"></div>
        <div class="visitor" id="visitor"></div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            let visitor = document.getElementById("visitor");
            visitor.classList.add("walking");

            setTimeout(() => {
                alert("A visitor has arrived! Time for a quiz.");

                // Enable clicking after alert is dismissed
                visitor.style.pointerEvents = "auto";


                visitor.addEventListener("click", () => {
                    window.location.href = "{{ route('game.video') }}"; // Redirect to the quiz page
                });

            }, 8000);
        });
    </script>
</body>
</html>
