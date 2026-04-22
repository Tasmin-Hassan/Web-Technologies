<?php $theme = $_COOKIE['theme'] ?? 'light'; ?>



<body style="background:<?= $theme=='dark'?'black':'white' ?>">

<h2>Home</h2>

Welcome <?= $_SESSION['username'] ?>
<br>
Time: <?= $_SESSION['time'] ?>

<br>

<a href="main.php?page=theme">Theme</a>

<br>




<a href="main.php?page=logout">Logout</a>

</body>