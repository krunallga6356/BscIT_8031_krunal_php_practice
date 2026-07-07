<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        error_reporting(0);
    ?>

    <form method = "GET">
        Enter number : <input type = "number" name = "number1"  required> <br><br>
        Enter number : <input type = "number" name = "number2"  required> <br><br>

        Operators : 
        <select name = "res" required >
            <option value = "select"> Select Operator </option>
            <option value = "add"> Addition (+) </option>
            <option value = "sub"> Subtraction (-) </option>
            <option value = "mul"> Multiplication (*) </option>
            <option value = "div"> Division (/) </option><br><br>
        </select>

        <input type = "submit" name = "Calculate" value = "Calculate"><br><br>
    </form>
    
    <?php
            function calculate($var1, $var2, $res){
                switch($res){
                    case "add":
                        return $var1 + $var2;

                    case "sub":
                        return $var1 - $var2;

                    case "mul":
                        return $var1 * $var2;

                    case "div":
                        return ($var2 != 0) ? $var1 / $var2 : "Cannot divide by zero";

                    default:
                        return "Invalid Operation";
                }
            }

            if(isset($_GET['Calculate'])){

                $var1 = $_GET['number1'];
                $var2 = $_GET['number2'];
                $res = $_GET['res'];

                echo "Number 1: $var1 <br>";
                echo "Number 2: $var2 <br>";

                $result = calculate($var1, $var2, $res);

                echo "Result: $result";
            }

        ?>
</body>
</html>