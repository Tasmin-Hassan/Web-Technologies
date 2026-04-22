<?php

if ($page == 'signup') {

    $errors = [];

    $old = [];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') 
        {

        $old = $_POST;

        if (strlen($_POST['username']) < 3)
            $errors['username'] = "minimum 3 character";

        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
            $errors['email'] = "u r invalid email";

        if (strlen($_POST['password']) < 6)
            $errors['password'] = "minimum 6 character";

        if ($_POST['password'] != $_POST['confirm'])
            $errors['confirm'] = "not match";

        if (empty($errors)) {
            $_SESSION['user'] = $_POST;
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['time'] = date("H:i:s");

            header("Location: main.php?page=home");
        }
    }

    include 'views/signup.php';
}



elseif ($page == 'signin') {

    $error = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if ($_POST['email'] == $_SESSION['user']['email'] &&
            $_POST['password'] == $_SESSION['user']['password']) {

            $_SESSION['username'] = $_SESSION['user']['username'];
            $_SESSION['time'] = date("H:i:s");

            header("Location: main.php?page=home");
        } else {
            $error = "Wrong login";
        }
    }

    include 'views/signin.php';
}


// HOME (Dashboard)
elseif ($page == 'home') {

    if (!isset($_SESSION['username'])) {
        header("Location: main.php?page=signin");
    }

    include 'views/home.php';
}


// LOGOUT
elseif ($page == 'logout') {

    session_destroy();
    header("Location: main.php?page=signin");
}
?>