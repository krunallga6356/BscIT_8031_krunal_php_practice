<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $conn = new mysqli("localhost:3307", "root", "" ,"TEST");
        /*if($conn){
            echo " Database Connection successfull.";
        }
        else{
            die("Connection failed : " . $conn->connect_error);
        }*/

        if(!$conn){
            die("Connection failed : " . mysqli_connect_error());
        }
        else{
            echo " Database Connection successfull.";
        }

        $conn->close();
    ?>
</body>
</html>