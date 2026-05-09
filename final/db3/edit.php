<?php
include "db.php";

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>

<h2>Edit Student</h2>

<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

    Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>
    Email: <input type="text" name="email" value="<?php echo $row['email']; ?>"><br><br>
    Dept: <input type="text" name="department" value="<?php echo $row['department']; ?>"><br><br>

    <button>Update</button>
</form>