<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>

<h1>Welcome</h1>

<?php
echo "Hello " . $_SESSION['username'];
?>
<br><br>

<a href="logout.php">Logout</a>

</body>
</html>