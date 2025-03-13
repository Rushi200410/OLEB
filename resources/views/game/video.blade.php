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
            height: 100vh;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        /* Background video with blur */
        #bg-video {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            min-width: 100%;
            min-height: 100%;
            object-fit: cover;
            filter: blur(20px);
            z-index: 1;
        }
        /* Vignette overlay (for cinematic edges) */
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 2;
            pointer-events: none;
            /* Creates a subtle radial gradient from transparent center to darker edges */
            background: radial-gradient(ellipse at center, 
                                        rgba(0, 0, 0, 0) 50%, 
                                        rgba(0, 0, 0, 0.8) 100%);
        }
        /* Foreground video with subtle box shadow */
        #video {
            position: relative;
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            z-index: 3;
            pointer-events: none; /* Prevents user interactions */
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.7); /* Soft shadow for cinematic effect */
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
            z-index: 4;
        }
    </style>
</head>
<body>

    <!-- Blurred background video -->
    <video id="bg-video" autoplay muted loop playsinline preload="auto">
        <source src="{{ $videoPath }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- Vignette overlay -->
    <div class="overlay"></div>

    <!-- Foreground video -->
    <video id="video" autoplay muted playsinline preload="auto">
        <source src="{{ $videoPath }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <button class="skip-button" onclick="skipVideo()">Skip</button>

    <script>
        const video = document.getElementById('video');

        // Force autoplay function for the foreground video
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

        // Redirect when the foreground video ends
        video.onended = function() {
            window.location.href = "{{ route('game.quiz', ['question_no' => 1]) }}";
        };

        // Skip button function
        function skipVideo() {
            window.location.href = "{{ route('game.quiz', ['question_no' => 1]) }}";
        }
    </script>

</body>
</html>
