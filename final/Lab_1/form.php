<?php
session_start();

$errors = $_SESSION['errors'] ?? [];

$old = $_SESSION['old'] ?? [];
$success = $_SESSION['success'] ?? "";

unset($_SESSION['errors'], $_SESSION['old'], $_SESSION['success']);
?>

<?php if ($success): ?>


    <p style="color:green;"><?php echo $success; ?>
</p>

<?php endif; ?>





<!DOCTYPE html>
<html>
<head>
    <title>form</title>
</head>
<body>

<h2>user information form</h2>



<form action="formValidation.php" method="POST">

    Username:
    <br>
    <input type="text" name="username" value="<?php echo $old['username'] ?? ''; ?>">

    <span style="color:red;"><?php echo $errors['username'] ?? ''; ?>
</span>
    <br>
    

    Name:

    <br>
    <input type="text" name="name" value="<?php echo $old['name'] ?? ''; ?>">
    <span style="color:red;"><?php echo $errors['name'] ?? ''; ?></span>
    <br>
    <br>

    Email:
    <br>
    <input type="text" name="email" value="<?php echo $old['email'] ?? ''; ?>">
    <span style="color:red;"><?php echo $errors['email'] ?? ''; ?></span>
    <br>
    
    <br>

    Phone:
    <br>
    <input type="text" name="phone" value="<?php echo $old['phone'] ?? ''; ?>">
    <span style="color:red;"><?php echo $errors['phone'] ?? ''; ?>
</span>
    <br>

    <button type="submit">Submit</button>


</form>

</body>


</html>