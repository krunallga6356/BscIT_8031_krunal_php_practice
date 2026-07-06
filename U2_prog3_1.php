<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $str = array("name"=>"Krunal","age"=>20);
        //$array = ["menifest"," it until it's real"];
        /*foreach($array as $ele){
            echo $ele;
        }*/
        print_r(array_change_key_case($str, CASE_LOWER));

        echo "<br>";

        print_r(array_change_key_case($str, CASE_UPPER));
        
    ?>
</body>
</html>