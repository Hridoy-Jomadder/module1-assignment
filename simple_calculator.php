<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UFT-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Simple Calculator</title>
        <style>
        <?php include "styles.css" ?>
        </style>
    </head>
<body>
    <div class="container">
        <h2>Simple Calculator</h2>
            <form method="post" action="">
                <input type="number" name="num1" placeholder="Enter first Number" required><br>
                <input type="number" name="num2" placeholder="Enter second Number" required><br>
                    <select name="operation">
                    <option value="add">Addition</option>
                    <option value="subtract">Subtraction</option>
                    <option value="multiply">Multiplicationy</option>
                    <option value="divide">Division</option>
                    <option value="binary">Binary Conversion</option>
                    <option value="octal">Octal Conversion</option>
                    <option value="hexadecimal">Hexadecimal Conversion</option>
                    </select><br>
                <button type="submit">Calculate</button>
            </form>
            <div id="result">
                <?php 
                   if ($_SERVER["REQUEST_METHOD"] == "POST"){
                        $num1 = $_POST["num1"];
                        $num2 = $_POST["num2"];
                        $operation = $_POST["operation"];

                    switch($operation){
                        case "add":
                            $result = $num1 + $num2;
                            echo "Result: $result";
                            break;

                        case "subtract":
                            $result = $num1 - $num2;
                            echo "Result: $result";
                            break;
                            
                        case "multiply":
                            $result = $num1 * $num2;
                            echo "Result: $result";
                            break;
                            
                        case "divide":
                            if ($num2 != 0){
                            $result = $num1 / $num2;
                            echo "Result: $result";
                            }else{
                                echo "Cannot divide by Zero.";
                            }
                            break;

                        case "binary":  
                            echo "Binary:" . decbin(num:$num1);
                            break;

                        case "octal":
                            echo "Octal:" . decoct(num:$num1);
                            break;

                        case "hexadecimal":
                            echo "Hexadecimal:" . dechex(num:$num1);
                            break;
                    }
                    }
                ?>
            </div>
    </div>
</body>
</html>