<?php
    session_start();
    if (isset($_SESSION['success_message'])) 
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Home</title>
</head>
<body>
    <?php
    {
        echo '<p style = "color: green;">' . $_SESSION['success_message'] . '</p>';
        unset($_SESSION['success_message']); // ลบข้อความนี้ออกจาก session
    }
    ?>
    <h1>Welcome to Exam</h1>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var buttonYes = document.getElementById("buttonYes");
            var messageYes = document.querySelector(".result-message.yes");
            var buttonNo = document.getElementById("buttonNo");
            var messageNo = document.querySelector(".result-message.no");
            var examForm = document.querySelector(".examform");

            buttonNo.addEventListener("mouseover", moveButtonNo);

            function moveButtonNo() {
                var randomTop = Math.floor(Math.random() * (examForm.clientHeight - buttonNo.clientHeight));
                var randomLeft = Math.floor(Math.random() * (examForm.clientWidth - buttonNo.clientWidth));
                buttonNo.style.top = randomTop + "px";
                buttonNo.style.left = randomLeft + "px";
            }

            buttonNo.addEventListener("click", function() {
                messageNo.style.display = "block";
                messageYes.style.display = "none";
            });

            buttonYes.addEventListener("click", function() {
                messageNo.style.display = "none";
                messageYes.style.display = "block";
            });
        });
    </script>
    <div class="examform">
    <h2>Are you Gay?</h2>
    <button id="buttonNo">No!</button>
    <button id="buttonYes">Yes!</button>
    <p class="result-message no">คุณไม่ใช่เกย์</p>
    <p class="result-message yes">คุณเป็นเกย์</p>
    </div>
</body>
</html>