<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call by Value Example</title>
</head>
<body>
    <?php
        function adder($str2)   // Call by value
        {
            $str2 .= 'call by value';
        }

        $str = "This is ";
        adder($str);
        echo $str;
    ?>
</body>
</html>