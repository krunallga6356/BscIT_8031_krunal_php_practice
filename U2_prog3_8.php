<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $week = array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday");
            array_shift($week); 
            
            foreach($week as $ele){
                echo $ele;
                echo "<br>";
            }
    ?>
</body>
</html>