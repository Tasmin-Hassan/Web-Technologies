<?php $theme = $_COOKIE['theme'] ?? 'light'; ?>

<body style="background:<?= $theme=='dark'?'black':'white' ?>">

<h1>Signin</h2>


<form method="POST">

Email: <input name="email">


<br>
Password: <input type="password" placeholder="Enter your valid password" name="password">

<br>

<?= $error ?? '' ?>
<br>

<button type="submit">Login</button>
</form>
</body>