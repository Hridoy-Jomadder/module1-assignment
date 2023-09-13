<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UFT-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Weather Report</title>
    <style>
        <?php include "styles.css"?>

    </style>
</head>

<body style="font-family: times new roman; background-color: #d0d8e4;">
 <div class="container">
    <h2>Weather Report</h2><br><br>
    <form method="POST" action="">
        <label for="temperature">Enter temperature:</label>
        <input type="number" name="temperature" required><br><br>
        <button type="submit">check</button>


    </form>

    <div id="result">
    <?php


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $number = $_POST["temperature"];
        $temperature = $_POST["temperature"];


        if ($temperature <= 0) {
            echo "It's freezing!";
        } elseif ($temperature > 0 && $temperature <= 20) {
            echo "It's cool.";
        } elseif ($temperature > 20) {
            echo "It's warm.";
        }
    }
    ?>
    </div>
    </div>
</body>

</html>
