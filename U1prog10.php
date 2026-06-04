<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $a = array("Krunal "," Gajjar ");
        $b = array("Mihir "," Gajjar ");

        $c = array_merge($a,$b);

        foreach($c as $Element){
            echo $Element;
        }

    ?>
</body>
</html>