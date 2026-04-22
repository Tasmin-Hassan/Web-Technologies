<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    setcookie("theme", $_POST['theme'], time() + 86400*30);
}

include 'views/theme.php';
?>