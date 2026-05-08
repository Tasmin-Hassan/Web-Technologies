<?php
session_start();

$fullname = $_POST['fullname'];
$username = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$country = $_POST['country'];

$profilePic = $_FILES['profile']['name'];
$tmp = $_FILES['profile']['tmp_name'];

if (empty($fullname) || empty($username) || empty($password) ||
    empty($gender) || empty($country) || empty($profilePic))
{
    echo "Enter Valid Data";
    exit;
}

move_uploaded_file($tmp, "uploads/" . $profilePic);

$_SESSION['fullname'] = $fullname;
$_SESSION['username'] = $username;
$_SESSION['gender'] = $gender;
$_SESSION['country'] = $country;
$_SESSION['profile'] = "uploads/" . $profilePic;

header("Location: dashboard.php");
exit;
?>

