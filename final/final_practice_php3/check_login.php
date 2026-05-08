<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "student_db");


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$username = $_POST['username'];
$password = $_POST['password'];



if (empty($username) || empty($password)) {
    echo "Please fill all fields";
    exit;
}



$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);



if (mysqli_num_rows($result) == 1) {

    $_SESSION['username'] = $username;
    header("Location: home.php");
    exit;
} 


else {
    echo "Invalid username or password";
}

mysqli_close($conn);

?>