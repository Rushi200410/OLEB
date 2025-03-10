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
        }
        .character {
            position: absolute;
            width: 80px;
            height: 80px;
            transition: transform 2s linear;
            animation: resting 4s infinite ease-in-out;
        }

        /* Breathing animation */
        @keyframes resting {
            0%, 100% { transform: translateX(10px) translateY(-10px); }
            50% { transform: translateX(-10px) translateY(10px); }
        }

        .visitor {
            position: absolute;
            width: 80px;
            height: 80px;
            bottom: 0;
            left: 100%;
            cursor: pointer;
            pointer-events: none;
        }

        /* Different Walk Animations for Each Timeline */
        @keyframes walk-1 {
            0% { left: 100%; bottom: 5%; }
            40% { left: 56%; bottom: 54.5%; }
            75% { left: 30%; bottom: 25%; }
            95% { left: 17%; bottom: 45%; }
            100% { left: 23%; bottom: 49.5%; }
        }

        @keyframes walk-2 {
            0% { left: 30%; bottom: 0%; }
            5% { left: 35%; bottom: 8%; }
            30% { left: 15%; bottom: 35%; }
            50% { left: 30%; bottom: 53%; }
            60% { left: 23%; bottom: 63%; }
            75% { left: 40%; bottom: 68%; }
            100% { left: 62%; bottom: 57%; }
        }

        @keyframes walk-3 {
            0% { left: 80%; bottom: 0%; }
            20% { left: 80%; bottom: 10%; }
            95% { left: 45%; bottom: 55%; }
            100% { left: 43%; bottom: 60%; }
        }

        @keyframes walk-4 {
            0% { left: 62%; bottom: 70%; }
            10% { left: 61%; bottom: 60%; }
            100% { left: 40%; bottom: 4%; }
        }

        @keyframes walk-5 {
            0% { left: 30%; bottom: 0%; }
            7% { left: 28%; bottom: 5%; }
            80% { left: 52%; bottom: 40%; }
            100% { left: 45%; bottom: 50%; }
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

    <div class="game-container" style="background: url('{{ asset("images/$bg_name") }}') no-repeat center center/cover;">
        <a href="{{ route('home', ['dec_timeline' => 1]) }}" class="home-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4z"/>
            </svg>
        </a>
        <div class="character" id="mainCharacter" style="background: url('{{ asset("images/$char_name.png") }}') no-repeat center center/contain;"></div>
        <div class="visitor" id="visitor" style="background: url('{{ asset("images/$side_char_name") }}') no-repeat center center/contain;"></div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            let visitor = document.getElementById("visitor");
            let character = document.getElementById("mainCharacter");
            let timeline = {{ $timeline }};  // Get timeline from Laravel

            let characterPositions = {
                1: { left: "26%", bottom: "52%" },
                2: { left: "65%", bottom: "57%" },
                3: { left: "45.5%", bottom: "63%" },
                4: { left: "37%", bottom: "3%" },
                5: { left: "42%", bottom: "53%" }
            };

            let charPos = characterPositions[timeline] || { left: "28%", bottom: "58%" };
            character.style.left = charPos.left;
            character.style.bottom = charPos.bottom;

            let animationClass = timeline ? `walk-${timeline}` : "";  // Apply animation if timeline is set

            if (animationClass) {
                visitor.style.animation = `${animationClass} 8s linear forwards`;
            }

            setTimeout(() => {
                alert("A visitor has arrived! Time for a quiz.");

                character.style.animation = "none";  // Stop breathing effect
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
