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
            bottom: 58%;
            left: 28%;
            transition: transform 2s linear;
            animation: resting 4s infinite ease-in-out;
        }

        /* Breathing animation */
        @keyframes resting {
            0%, 100% { transform: translateX(10) translateY(-10); }
            50% { transform: translateX(-10px) translateY(10px); }
        }

        .visitor {
            position: absolute;
            width: 80px;
            height: 80px;
            background: url('{{ asset('images/side-character.png') }}') no-repeat center center/contain;
            bottom: 0;
            left: 100%;
            cursor: pointer;
            pointer-events: none;
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

        .home-button {
            position: absolute;
            top: 20px;
            right: 20px;
            color: #ffffff;
            padding: 10px;
            border-radius: 50%;
            cursor: pointer;
            transition: background 0.3s ease-in-out;
        }

        .home-button:hover {
            background: rgba(255, 255, 255, 1);
            color: #000;
        }

        .home-button i {
            font-size: 24px;
            color: #333;
        }
    </style>
</head>
<body>

    <div class="game-container">
        <a href="{{ route('home', ['dec_timeline' => 1]) }}" class="home-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4z"/>
            </svg>
        </a>
        <div class="character" id="mainCharacter"></div>
        <div class="visitor" id="visitor"></div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            let visitor = document.getElementById("visitor");
            let character = document.getElementById("mainCharacter");

            // Start visitor walking
            visitor.classList.add("walking");

            // Image switching logic (Every 1.5 sec)
            let images = [
                "{{ asset('images/main-character.png') }}",
                "{{ asset('images/rest2.png') }}"
            ];
            let index = 0;
            let imageSwitchInterval = setInterval(() => {
                index = (index + 1) % images.length;
                character.style.backgroundImage = `url(${images[index]})`;
            }, 1800);

            // Stop animation when visitor reaches the position (after 8 seconds)
            setTimeout(() => {
                alert("A visitor has arrived! Time for a quiz.");

                // Stop animations
                character.style.animation = "none";  // Stop breathing effect
                clearInterval(imageSwitchInterval);  // Stop image switching

                // Enable clicking on visitor
                visitor.style.pointerEvents = "auto";
                visitor.addEventListener("click", () => {
                    window.location.href = "{{ route('game.video') }}";
                });

            }, 8000);
        });
    </script>

</body>
</html>
