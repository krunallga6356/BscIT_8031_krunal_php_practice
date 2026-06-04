<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $Names = array("Krunal","Vansh","Raj","B");

        $Rev = array_reverse($Names);

        foreach($Rev as $Element){
            echo $Element."<br>";
        }
    ?>
</body>
</html>