<!DOCTYPE html>
<html>
    <head>
        <title>registration</title>
</head>
<body>
    <h1>Student Registration</h1>
    <form method ="POST">
        Full Name: <input type="text" name="name" required><br><br>
        Email Address: <input type="text" name="email" required><br><br>
        Username : <input type= "text" name="uname" required> <br> <br>
        Password: <input type="password" name="password" required> <br><br>
        Confirm Password: <input type="password" name="cpassword" required ><br><br>
        Age: <input type="number" name="age" required > <br><br>

        Gender: 
        <input type="radio" name="gender" value="Male" required>Male 
        <input type="radio" name ="gender" value="Female" required>Female <br><br>

        Course Selection:
        <select name="course">
            <option value="Web Technologies">Web Technologies</option>
            <option>Research Methodology</option>
            <option>COA</option>
            <option>CN</option>
</select> <br><br>
          
        <input type="checkbox" name="terms">I accpect all Terms & Conditions<br><br>


        <input type="submit" name="submit" value="Register"><br><br>
</form>



<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

 $name = $_POST["name"];
 $email = $_POST["email"];
 $username = $_POST["uname"];
 $password = $_POST["password"];
 $confirm_password = $_POST["cpassword"];
 $age = $_POST["age"];


 $errors = [];


 if(empty($name) || empty($email) || empty($username) || empty($password) || empty($age)) 
    {
        $errors[] = "All fields are required";
    }


    if(!preg_match("/^[a-zA-Z ]*$/", $name))
    {
        $errors[]="Only letters allowed";
    }


    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $errors[]="Invalid Email";
    }


    if($password != $confirm_password)
        {
            $errors[]="Password do not match";
        }


    if(strlen($username) < 5)
        {
            $errors[]="username must be more than 5 character";
        }


    if(strlen($password) < 6)
            {
                $errors[]="password must be getter than 6 digit";

            }


    if ($age < 18) {
        $errors[] = "Must be 18+";

    }


     if (empty($_POST["gender"])) {
        $errors[] = "Select gender";
    }



if (empty($_POST["course"])) {
        $errors[] = "Select course";
    }



if (!isset($_POST["terms"])) {
        $errors[] = "Accept terms";
    }




    if(empty($errors)){

    echo "Registration Successful <br> <br>";

    echo "Name : $name <br>";
    echo "Email : $email <br>";
    echo "Username : $username <br>";
    echo "Age : $age <br>";
    }

    else{

    foreach($errors as $e){
        echo $e . "<br>";
    }


    }



}

?>

</body>
</html>





        

    