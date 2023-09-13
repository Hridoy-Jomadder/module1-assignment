<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UFT-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Grade Calculator</title>
    <style>
        <?php include "styles.css"?>
    </style>
</head>

<body style="font-family: times new roman; background-color: #d0d8e4;">
   
   <div class="container">
    <h1>Grade Calculator</h1>


    <form method="post" action="">

        <label for="score1">Test Score 1:</label>

        <input type="number" name="score1" required><br>

        <label for="score2">Test Score 2:</label>

        <input type="number" name="score2" required><br>

        <label for="score3">Test Score 3:</label>

        <input type="number" name="score3" required><br>

        <button type="submit">calculate</button>
    </form>

    <div id="result">

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $score1 = $_POST["score1"];

        $score2 = $_POST["score2"];

        $score3 = $_POST["score3"];

        $average = ($score1 + $score2 + $score3) / 3;

        function calculateGrade($average)
        {
            if ($average >= 90) {
                return "A";
            } elseif ($average >= 80) {
                return "B";
            } elseif ($average >= 70) {
                return "C";
            } elseif ($average >= 60) {
                return "D";
            } else {
                return "F";
            }
        }

        $letterGrade = calculateGrade($average);

        echo "Average Score: {$average},<br>";


        echo "Letter Grade: {$letterGrade}";
    }
    ?>

    </div>
</div>

<!--
    <div style="padding: 50px;">
        <h2>Grade Calculator</h2>

        <input type="number" name="num1" placeholder="Test Score 1: " required><br>
        <input type="number" name="num2" placeholder="Test Score 2: " required><br>
        <input type="number" name="num2" placeholder="Test Score 3: " required><br>

        <button type="submit">Calculate</button>
        <?php 
       ?>

    </div>
-->
</body>

</html>
