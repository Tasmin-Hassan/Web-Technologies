<!DOCTYPE html>
<html>
    <head>
        <title>employee</title>
</head>

<body>
    <h1> Leave Approval Process</h1>

    <form method="POST">
        Employee Name:<input type="text" name="name" required> <br><br>
        Department :<input type= "text" name="dep" required> <br> <br>
        Number of Leave Days : <input type="number" name="day" required> <br> <br>

        <input type= "submit" name="submit" value="Submit"> <br><br>

</form>


<?php
if($_POST){

    $name = $_POST['name'];
    $department = $_POST['dep'];
    $day = $_POST['day'];

    if($day <=5 ){
        echo "Leave Approved";
    }

    else{
        echo "Pending Approval";
    }

}

?>

</body>
</html>






