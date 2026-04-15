<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST['username']);
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);

    $errors = [];
    $old = $_POST;


    
    if (empty($username)) {
        $errors['username'] = "Username required";

    } elseif (strlen($username) < 5) {
        $errors['username'] = "Username must be at least 5 char";
    }

    if (empty($name)) {
        $errors['name'] = " required";
    }

    if (empty($email)) {
        $errors['email'] = " required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email";
    }

    if (empty($phone)) {
        $errors['phone'] = " required";
    } elseif (!ctype_digit($phone)) {

        $errors['phone'] = "Phone need numbers";
    } elseif (strlen($phone) < 10) {
        $errors['phone'] = "Phone must be in 11 digits";
    }

   
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['old'] = $old;

        header("Location: form.php");
        exit();
    }

   
    $_SESSION['success'] = "Form submitted ";
    header("Location: form.php");
    exit();
}