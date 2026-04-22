<?php
session_start();

$page = $_GET['page'] ?? 'signup';

if ($page == 'signup') include 'controllers/user.php';


elseif ($page == 'signin') include 'controllers/user.php';

elseif ($page == 'home') include 'controllers/user.php';
elseif ($page == 'logout') include 'controllers/user.php';
elseif ($page == 'theme') include 'controllers/theme.php';
?>