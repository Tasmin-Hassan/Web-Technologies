<?php include "db.php"; ?>

<h1>Add Student</h1>

<form action="insert.php" method="POST">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="text" name="email"><br><br>
    Reg No: <input type="text" name="registration_no"><br><br>
    Dept: <input type="text" name="department"><br><br>

    <button type="submit">Add</button>
</form>

<hr>

<h1>Student List</h1>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Reg No</th>
        <th>Dept</th>
        <th>Action</th>
    </tr>

<?php
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){

    while($row = mysqli_fetch_assoc($result)){

        echo "<tr>";

        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['registration_no'] . "</td>";
        echo "<td>" . $row['department'] . "</td>";

        echo "<td>
                <a href='edit.php?id=" . $row['id'] . "'>Edit</a>
                <a href='delete.php?id=" . $row['id'] . "'>Delete</a>
              </td>";

        echo "</tr>";
    }

} else {
    echo "<tr><td colspan='6'>No records found</td></tr>";
}
?>

</table>

</body>
</html>