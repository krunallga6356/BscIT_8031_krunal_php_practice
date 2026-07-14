<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $conn = new mysqli("localhost:3307","root","","TEST");
        if(!$conn){
            die("Connection Failed : " . mysqli_connect_error());
        }

        $sql = "CREATE TABLE IF NOT EXISTS student
            (
                ID INT AUTO_INCREMENT PRIMARY KEY,
                NAME VARCHAR(150),
                EMAIL VARCHAR(150),
                CITY VARCHAR(150)
            )";

            if(mysqli_query($conn, $sql)){
                echo "Table Created Successfully.";
            }
            else{
                echo "Error : " . $conn->error;
            }

            $conn->close();
    ?>
</body>
</html>