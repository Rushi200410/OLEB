<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Game</title>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap');

        body {
            margin: 0;
            overflow: hidden;
            font-family: 'Times New Roman', serif;
        }
        .game-container {
            position: relative;
            width: 100vw;
            height: 100vh;
        }
        .background {
            position: absolute;
            width: 100%;
            height: 100%;
            background: url('{{ asset('images/fountain.jpg') }}') no-repeat center center/cover;
            transition: filter 1s ease-in-out;
        }
        .darken-bg {
            filter: brightness(50%);
        }
        .character {
            position: absolute;
            width: 800px;
            height: 800px;
            background: url('{{ asset('images/main-character.png') }}') no-repeat center center/contain;
            left: -20%;
            animation: slide-right 2s cubic-bezier(0.250, 0.460, 0.450, 0.940) forwards;
        }
        .quiz-container {
            position: fixed;
            top: 15%;
            bottom: 15%;
            right: 10%;
            width: 800px;
            height: 60vh;
            padding: 55px;
            background: rgba(139, 69, 19, 0.8);
            border: 5px solid #daa520;
            border-radius: 20px;
            color: white;
            text-align: center;
            animation: slide-left 1.5s ease-out forwards;
            animation-delay: 2s;
            visibility: hidden;
        }
        .quiz-container.show {
            visibility: visible;
        }
        .quiz-container h2 {
            margin-bottom: 50px;
            font-size: 40px;
            font-family: 'Cinzel', serif;
        }
        .quiz-option {
            display: block;
            width: 100%;
            padding: 15px;
            margin: 20px 0;
            background: #daa520;
            border: 5px solid #b8840b;
            color: rgb(0, 0, 0);
            font-size: 18px;
            cursor: pointer;
            border-radius: 5px;
        }
        .quiz-option:hover {
            background: #b8860b;
            border: 5px solid #daa520;
        }

        @keyframes slide-right {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(100px);
            }
        }
        @keyframes slide-left {
            0% {
                transform: translateX(100vw);
                visibility: visible;
            }
            100% {
                transform: translateX(0);
                visibility: visible;
            }
        }

        .home-button {
            position: absolute;
            top: 20px;
            right: 20px;
            color: #ffffff;
            padding: 10px;
            border-radius: 50%;
            /* box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2); */
            cursor: pointer;
            transition: background 0.3s ease-in-out;
            visibility: visible;
        }

        .home-button:hover {
            background: rgba(255, 255, 255, 1);
            color: #000
        }

        .home-button i {
            font-size: 24px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="game-container">
        <a href="{{ route('home') }}" class="home-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4z"/>
            </svg>
        </a>
        <div class="background" id="background"></div>
        <div class="character" id="mainCharacter"></div>
        <div class="visitor" id="visitor"></div>
        <div class="quiz-container" id="quizContainer">
            <h2>Who was the founder of the Maurya Empire?</h2>
            <button class="quiz-option">Chandragupta Maurya</button>
            <button class="quiz-option">Ashoka</button>
            <button class="quiz-option">Harsha</button>
            <button class="quiz-option">Samudragupta</button>
        </div>
    </div>
    <script>
        setTimeout(() => {
            document.getElementById('quizContainer').classList.add('show');
            document.getElementById('background').classList.add('darken-bg');
        }, 2500);
    </script>
</body>
</html>
