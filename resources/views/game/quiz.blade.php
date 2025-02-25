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
    </style>
</head>
<body>
    <div class="game-container">
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
