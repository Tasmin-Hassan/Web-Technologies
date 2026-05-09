<?php
include "db.php";

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$dept = $_POST['department'];

mysqli_query($conn, "UPDATE students SET name='$name', email='$email', department='$dept' WHERE id=$id");

echo "Updated";
echo "<br><a href='index.php'>Back</a>";
?>