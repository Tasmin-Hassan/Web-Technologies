<?php $theme = $_COOKIE['theme'] ?? 'light'; ?>
<body style="background:<?= $theme=='dark'?'black':'white' ?>">

<h2>Signup</h2>

<form method="POST">
Username:
<input name="username" value="<?= $old['username'] ?? '' ?>">

<?= $errors['username'] ?? '' ?>

<br>

Email:
<input name="email" value="<?= $old['email'] ?? '' ?>">

<?= $errors['email'] ?? '' ?>
<br>

Password:
<input type="password" name="password">
<?= $errors['password'] ?? '' ?>

<br>

Confirm:
<input type="password" name="confirm">
<?= $errors['confirm'] ?? '' ?>
<br>

<button type="submit">Signup</button>
</form>

<a href="main.php?page=signin">signin</a>

</body>