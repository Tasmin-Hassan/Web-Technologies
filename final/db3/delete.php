<?php
include "db.php";

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM students WHERE id=$id");

echo "Deleted";
echo "<br><a href='index.php'>Back</a>";
?>