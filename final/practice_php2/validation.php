<?php 

$name = $_POST["name"];
$email = $_POST["email"];
$age = $_POST["age"];


if (empty($name) || empty($email) || empty($age)){
    echo " All fields are required !!!";
}

elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo" Invalid email format";
}
elseif($age < 18) {
    echo "You must be 18 or older!";
}

else {
    echo "<h2>Form Submitted Successfully!</h2>";
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "Age: $age <br>";
}


echo "<br><br><a href='form.php'>Go Back</a>";




?>