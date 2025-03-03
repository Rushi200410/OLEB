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
            right: 5%;
            width: 700px;
            height: 60vh;
            padding-left: 55px;
            padding-right: 55px;
            padding-bottom: 55px;
            padding-top: 40px;
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

        /* Question Styling (Ellipsis + Popup) */
        .quiz-question {
            font-size: 32px;
            font-family: 'Cinzel', serif;
            white-space: normal;
            display: -webkit-box;
            -webkit-line-clamp: 2; /* Show 2 lines before cutting */
            -webkit-box-orient: vertical;
            overflow: hidden;

            overflow: hidden;
            text-overflow: ellipsis;
            cursor: pointer;
            width: 100%;
            max-width: 100%;
            text-align: center;
        }
        .quiz-question:hover {
            text-decoration: underline;
        }

        /* Popup for full question */
        .full-question-popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 20px;
            border: 2px solid black;
            border-radius: 10px;
            max-width: 80%;
            text-align: center;
            z-index: 1000;
        }
        .full-question-popup.active {
            display: block;
        }
        .popup-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }
        .popup-overlay.active {
            display: block;
        }

        /* Option Buttons (Auto-Scaling Font) */
        .quiz-option {
            display: block;
            width: 100%;
            padding: 15px;
            margin: 20px 0;
            background: #daa520;
            border: 5px solid #b8840b;
            color: black;
            font-size: 24px;
            cursor: pointer;
            border-radius: 5px;
            text-align: center;
            transition: background 0.3s ease;
        }
        .quiz-option:hover {
            background: #b8860b;
            border: 5px solid #daa520;
        }

        /* Keyframe Animations */
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
        <div class="quiz-container" id="quizContainer">
            <!-- Question with ellipsis -->
            <h2 class="quiz-question" id="questionText">{{$quiz_question->question}}</h2>

            <!-- Options -->
            <button class="quiz-option" id="option1">{{$quiz_question->option1}}</button>
            <button class="quiz-option" id="option2">{{$quiz_question->option2}}</button>
            <button class="quiz-option" id="option3">{{$quiz_question->option3}}</button>
            <button class="quiz-option" id="option4">{{$quiz_question->option4}}</button>
        </div>
    </div>

    <!-- Popup for Full Question -->
    <div class="popup-overlay" id="popupOverlay"></div>
    <div class="full-question-popup" id="fullQuestionPopup">
        <p id="fullQuestionText"></p>
        <button onclick="closePopup()">Close</button>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Show Quiz Container After Delay
            setTimeout(() => {
                document.getElementById('quizContainer').classList.add('show');
                document.getElementById('background').classList.add('darken-bg');
            }, 2500);

            // Handle Question Ellipsis & Popup
            const questionElement = document.getElementById("questionText");
            const popup = document.getElementById("fullQuestionPopup");
            const popupOverlay = document.getElementById("popupOverlay");
            const fullQuestionText = document.getElementById("fullQuestionText");

            questionElement.addEventListener("click", function () {
                fullQuestionText.textContent = questionElement.textContent;
                popup.classList.add("active");
                popupOverlay.classList.add("active");
            });

            popupOverlay.addEventListener("click", closePopup);
        });

        function closePopup() {
            document.getElementById("fullQuestionPopup").classList.remove("active");
            document.getElementById("popupOverlay").classList.remove("active");
        }

        // Auto-Scaling Font for Options
        function adjustFontSize(button) {
            let fontSize = 24;
            button.style.fontSize = `${fontSize}px`;

            while (button.scrollHeight > 50 && fontSize > 16) {
                fontSize -= 2;
                button.style.fontSize = `${fontSize}px`;
            }
        }

        const optionButtons = document.querySelectorAll(".quiz-option");
        optionButtons.forEach(button => adjustFontSize(button));
    </script>
</body>
</html>
