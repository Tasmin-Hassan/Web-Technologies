<?php
include "db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$reg = $_POST['registration_no'];
$dept = $_POST['department'];

mysqli_query($conn, "INSERT INTO students VALUES('', '$name', '$email', '$reg', '$dept')");

echo "Added Successfully";
echo "<br><a href='index.php'>Back</a>";
?>