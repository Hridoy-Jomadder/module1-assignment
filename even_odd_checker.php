<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UFT-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Even or Odd Checker</title>
    <style>
        <?php include "styles.css"?>
    </style>
</head>

<body style="font-family: times new roman; background-color: #d0d8e4;">
   
      <div class="container">
        <h2>Even/Odd Checker</h2><br><br>


        <form method="post" action="">
            <label for="number">Enter a Number:</label>
            <input type="number" name="number" required><br><br>
            <button type="submit">Checker</button>
        </form>

        <div id="result">

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = $_POST["number"];

            function isEven($num)
            {
                return $num % 2 == 0;
            }

            if (isEven($number)) {
                echo "{$number} is an even number.";
            } else {
                echo "{$number} is an odd number.";
            }
        }
        ?>

        </div>
    </div>

</body>

</html>
