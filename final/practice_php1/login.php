<?php
session_start();


if(isset($_SESSION["isLoggedIn"])) {
    header("Location: home.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>

<h2>Login Form</h2>

<form method="post" action="">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <input type="submit" name="login" value="Login">
</form>

<?php
if(isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    // simple check (demo purpose)
    if($username == "admin" && $password == "1234") {

        $_SESSION["isLoggedIn"] = true;
        $_SESSION["username"] = $username;

        header("Location: home.php");
        exit();

    } else {
        echo "<p style='color:red;'>Wrong username or password!</p>";
    }
}
?>

</body>
</html>