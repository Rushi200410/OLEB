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
            bottom: 58%;
            left: 28%;
            transition: transform 2s linear;
        }
        .score-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(2);
            background: rgba(0, 0, 0, 0.7);
            color: #fff;
            padding: 20px 40px;
            font-size: 48px;
            border-radius: 10px;
            font-weight: bold;
            opacity: 1;
            transition: transform 1s ease-in-out, top 1s ease-in-out, left 1s ease-in-out;
        }

        .score-container.shrink {
            top: 10px;
            left: 50%;
            transform: translateX(-50%) scale(1);
            font-size: 24px;
        }
    </style>
</head>
<body>
    <div class="game-container" style="background: url('{{ asset("images/$bg_name") }}') no-repeat center center/cover;">
        <div class="score-container" id="scoreContainer">Score: {{ $score }}</div>
        <a href="{{ route('home', ['dec_timeline' => 0]) }}" class="home-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4z"/>
            </svg>
        </a>
        <a href="{{ route('continue') }}" class="home-button">
            <div class="character" style="background: url('{{ asset("images/$char_name.png") }}') no-repeat center center/contain;" id="mainCharacter"></div>
        </a>
    </div>

    <script>
        console.log("Main character image:", "{{ asset('images/' . $char_name . '.png') }}");
        console.log("Alternate character image2:", "{{ asset('images/' . $char_name . '2.png') }}");
        console.log("Alternate character image3:", "{{ asset('images/' . $char_name . '3.png') }}");
        console.log("bg image:", "{{ asset('images/' . $bg_name) }}");


        document.addEventListener("DOMContentLoaded", () => {
            let character = document.getElementById("mainCharacter");
            let images = [
                "{{ asset('images/' . $char_name . '.png') }}",
                "{{ asset('images/' . $char_name . '2.png') }}",
                "{{ asset('images/' . $char_name . '3.png') }}"
            ];



            let index = 0;
            setInterval(() => {
                index = (index + 1) % images.length;
                character.style.backgroundImage = `url(${images[index]})`;
            }, 1000);

            // Delay before shrinking the score display
            setTimeout(() => {
                document.getElementById("scoreContainer").classList.add("shrink");
            }, 1000);
        });
    </script>
</body>
</html>
