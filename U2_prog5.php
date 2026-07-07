<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $var = "12345";
        echo "<b> Original value : " . $var . "<br>";
        echo "<b> New Data type : </b> " . gettype($var) . "<br><br>";

        settype($var, "integer");
        echo "<b> After Type Casting : </b> " . $var . "<br>";
        echo "<b> New Data Type : </b> " . gettype($var) . "<br><br>";

        settype($var, "double");
        echo "<b> After Converting to double : </b> " . $var . "<br>";
        echo "<b> New Data Type : </b> " . gettype($var) . "<br><br>";

        settype($var, "boolean");
        var_dump($var);
        echo "<b> New Data Type : </b> " . gettype($var) . "<br>";

    ?>
</body>
</html>