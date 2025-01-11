<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="5;url=https://1s.is/kho-tien-ich-online/">
    <title>Redirecting...</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
            color: #333;
        }
        .message {
            text-align: center;
        }
        .message p {
            margin: 0.5em 0;
        }
        .timer {
            font-size: 1.5em;
            color: #007BFF;
        }
    </style>
    <script>
        let seconds = 5;
        function countdown() {
            const timerElement = document.getElementById("timer");
            timerElement.textContent = seconds;
            if (seconds > 0) {
                seconds--;
                setTimeout(countdown, 1000);
            }
        }
        document.addEventListener("DOMContentLoaded", countdown);
    </script>
</head>
<body>
    <div class="message">
        <p>You will be redirected to <a href="https://1s.is/kho-tien-ich-online/">Kho Tiện Ích Online</a> in <span id="timer" class="timer">5</span> seconds.</p>
        <p>If you are not redirected, <a href="https://1s.is/kho-tien-ich-online/">click here</a>.</p>
    </div>
</body>
</html>
