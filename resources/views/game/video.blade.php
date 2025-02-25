<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video</title>
    <style>
        body {
            margin: 0;
            background: black;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            pointer-events: none; /* Prevents user interactions */
        }
        .skip-button {
            position: absolute;
            top: 20px;
            right: 20px;
            background: red;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

    <video id="video" autoplay muted playsinline preload="auto">
        <source src="{{ $videoPath }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <button class="skip-button" onclick="skipVideo()">Skip</button>

    <script>
        const video = document.getElementById('video');

        // Force autoplay function
        function forcePlayVideo() {
            video.muted = false; // Unmute after starting
            video.play().then(() => {
                console.log("Video autoplayed successfully!");
            }).catch(error => {
                console.warn("Autoplay blocked. Retrying...");
                setTimeout(forcePlayVideo, 500); // Retry every 500ms if blocked
            });
        }

        // Try to play when the page loads
        window.onload = function () {
            forcePlayVideo();
        };

        // Redirect to game.quiz when the video ends
        video.onended = function() {
            window.location.href = "{{ route('game.quiz') }}";
        };

        // Skip button function
        function skipVideo() {
            window.location.href = "{{ route('game.quiz') }}";
        }
    </script>

</body>
</html>
