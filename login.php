<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<?php
session_start();
if (isset($_SESSION['admin'])) header('location:./admin.php');
 ?>

<body>
    <div class="a">
        <h1>Log In</h1>
        <div class="error-message"> 
            <?php if (isset($_SESSION['error'])): ?>
                <h5>
                    <?php echo $_SESSION['error']; ?>
                    <?php unset($_SESSION['error']); // پاک کردن پیام خطا 
                    ?>
                </h5>
            <?php endif; ?>
        </div>
        <form action="./check.php" method="POST" class="form">
            <div class="b">
                User Name: <input type="text" name="username" class="c" placeholder="ali..!">
                <div class="d">
                    Password: <input type="password" name="password" class="e" placeholder="password..!">
                    <div class="m">
                        <input type="submit" class="n" value="Login">
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>