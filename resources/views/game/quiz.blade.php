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
            margin-top: -5px;
            font-size: 40px;
            font-family: 'Cinzel', serif;
            max-height: 200px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            cursor: pointer;
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

        .popup-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            display: none;
            justify-content: center;
            align-items: center;
        }
        .popup-content {
            background: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            width: 50%;
            max-width: 600px;
        }
        .popup-content h2 {
            font-size: 24px;
            color: black;
        }
        .close-popup {
            margin-top: 10px;
            padding: 10px 20px;
            background: #daa520;
            border: none;
            cursor: pointer;
            font-size: 16px;
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

        <div class="background" id="background"></div>
        <div class="character" id="mainCharacter"></div>
        <div class="quiz-container" id="quizContainer">
            <h2 id="questionText">{{$quiz_question->question}}</h2>
            <button class="quiz-option" id="option1">{{$quiz_question->option1}}</button>
            <button class="quiz-option" id="option2">{{$quiz_question->option2}}</button>
            <button class="quiz-option" id="option3">{{$quiz_question->option3}}</button>
            <button class="quiz-option" id="option4">{{$quiz_question->option4}}</button>
        </div>
    </div>

    <div class="popup-overlay" id="popupOverlay">
        <div class="popup-content">
            <h2 id="fullQuestionText"></h2>
            <button class="close-popup" id="closePopup">Close</button>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const quizOptions = document.querySelectorAll(".quiz-option");
            const correctAnswer = {{ $quiz_question->answer }};

            quizOptions.forEach((button, index) => {
                button.addEventListener("click", function () {
                    const selectedOption = index + 1;
                    const isCorrect = selectedOption === correctAnswer ? 1 : 0;

                    // Change button color based on correctness
                    button.style.backgroundColor = isCorrect ? "green" : "red";

                    // Disable all buttons after selection
                    quizOptions.forEach(btn => btn.disabled = true);

                    // Generate route with placeholders and replace dynamically
                    let nextRoute = @json(route('game.quiz.verify', ['question_no' => $quiz_question['question_no'], 'correct' => '__PLACEHOLDER__']));
                    // let nextRoute = {{ route('game.quiz.verify', ['question_no' => $quiz_question['question_no'], 'correct' => '__PLACEHOLDER__']) }};

                    nextRoute = nextRoute.replace('__PLACEHOLDER__', isCorrect); // Replace with correct value

                    // Redirect after 5 seconds
                    setTimeout(() => {
                        window.location.href = nextRoute;
                    }, 1000);
                });
            });

            const questionText = document.getElementById("questionText");
            const fullQuestionText = document.getElementById("fullQuestionText");
            const popupOverlay = document.getElementById("popupOverlay");
            const closePopup = document.getElementById("closePopup");

            questionText.addEventListener("click", function () {
                fullQuestionText.textContent = questionText.textContent;
                popupOverlay.style.display = "flex";
            });

            closePopup.addEventListener("click", function () {
                popupOverlay.style.display = "none";
            });
        });



        setTimeout(() => {
            document.getElementById('quizContainer').classList.add('show');
            document.getElementById('background').classList.add('darken-bg');
        }, 2500);
    </script>
</body>
</html>
