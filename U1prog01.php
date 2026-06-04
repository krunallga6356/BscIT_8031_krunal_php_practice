<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include "include_Header.php";
    $studentName = "Krunal Gajjar";
    $semResult = "Pass";
    $SEMESTER = 4;
    $CGPA = 9.5;

    echo "Student Name: " . $studentName . "<br>";
    echo "Previous Semester: " . $SEMESTER . "<br>";
    echo "Result: " . $semResult."<br>";
    echo "Previous Semester CGPA : " . $CGPA . "<br>";
    echo "<br>";

    include "include_footer.php";
?>
    
</body>
</html>