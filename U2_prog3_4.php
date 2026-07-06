<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $array1 = array("Name","Age");
        $array2 = array("Krunal","20");

        print_r(array_combine($array1,$array2));
    ?>
</body>
</html>