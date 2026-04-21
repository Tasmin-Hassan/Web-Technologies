<?php
session_start();
session_destroy();

header("Location: /Web-Technologies/final/practice_php1/login.php");
exit();
?>