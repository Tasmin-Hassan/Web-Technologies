<!DOCTYPE html>
<html>
    <head>
        <title>result checker</title>
</head>
        <body>

        <h1>Student Result Checker </h1>

        <form method="POST">

            Name: <input type="text" name="name" required><br><br>
            Marks: <input type="number" name="marks" required><br><br>

            <input type="submit" name="submit" value="check"> <br> <br>
</form>


<?php

if($_POST){
    $name= $_POST['name'];
    $marks= $_POST['marks'];

    if ($marks >= 50 && $marks<=100){
        echo "Pass";
    }
    else if ($marks >=0 && $marks< 50){
        echo "Fail";
    }

    else{
        echo "Invalid";

    }
}

?>

</body>
</html>
