<!DOCTYPE html>
<html>
    <head>
        <title>registration</title>
</head>
<body>
    <h1>Student Registration Form</h1>
    <form method="POST">

    Name: <input type ="text" name="name" required><br><br>
    Email: <input type ="text" name="email" required><br><br>
    Age: <input type="number" name="age" required><br><br>

    Department:
    <select name="deparment">
        <option value="CSE">CSE</option>
        <option value="EEE">EEE</option>
        <option value="BBA">BBA</option>
</select>
<br><br>
</form>

<?php

//database connection//
$conn = mysqli_connect("localhost" , "root" , "", "university_db");

//check connection//
if(!$conn){
    die("Not Connected");
}


//data insert//
if($_SERVER["REQUEST_METHOD"]== "POST"){
$name= $_POST["name"];
$email= $_POST["email"];
$age = $_POST["age"];
$department = $_POST["department"];

$sql = "INSERT INTO students(name, email, age, department) VALUES('$name', '$email', '$age', '$department')";


if (mysqli_query($conn, $sql)){
    echo "Registration Successful";
}

else{
    echo "Error";
}

}

?>
</body>
</html>



