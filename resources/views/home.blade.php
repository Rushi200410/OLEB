<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swaraj: Flames of Rebellion</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        body {
            background: url('{{ asset('images/image.jpg') }}') no-repeat center center/cover;
        }
    </style>
</head>
<body>

    <!-- Logos -->
    <img src="{{ asset('images/oleb_logo.png') }}" class="logo logo-left" alt="Left Logo">
    <img src="{{ asset('images/cbsc_logo.png') }}" class="logo logo-right" alt="Right Logo">
    <div class="container">
        <h1>Swaraj: Flames of Rebellion</h1>
        <div class="buttons">

            @if($continue == 0)
                <button id="newGameBtn">Start Game</button>
            @else 
                <button id="newGameBtn">New Game</button>
                <a href="{{ route('continue') }}"><button>Continue</button></a>
            @endif
            <button>Configure</button>
        </div>
    </div>

    <!-- Modal for Rules -->
    <div id="rulesModal" class="modal">
        <div class="modal-content">
            <h2>Game Rules</h2>
            <p>Welcome to Swaraj: Flames of Rebellion. This game is set in the heart of India's struggle for freedom. You will take on the role of a revolutionary leader, making strategic decisions to challenge colonial rule.</p>
            <p>Plan your strategies carefully, make alliances, and lead your people to independence. The choices you make will shape the outcome of history. Are you ready for the challenge?</p>
            <button id="closeModal">OK</button>
        </div>
    </div>

    <!-- Bottom Right Button -->
    <a class="bottom-right-btn" href="{{ route('logout') }}" onclick="alert('Do you really want to LogOut')">LogOut</a>

    <script>
        document.getElementById("newGameBtn").addEventListener("click", function() {
            document.getElementById("rulesModal").style.display = "flex";
        });

        // Close the modal and return to the home screen if clicking outside the modal content
        window.addEventListener("click", function(event) {
            let modal = document.getElementById("rulesModal");
            let modalContent = document.querySelector(".modal-content");

            if (event.target === modal) {
                modal.style.display = "none";
            }
        });

        // Close modal and start game when clicking "OK"
        document.getElementById("closeModal").addEventListener("click", function() {
            document.getElementById("rulesModal").style.display = "none";
            window.location.href = "{{ route('game.start') }}"; // Change route accordingly
        });
    </script>

</body>
</html>
