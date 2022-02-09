<?php
    require_once 'engine/db.php';
    if(isset($_SESSION['loggedin']))
    {
        header("Location:profile.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <title>ورود به حساب کاربری</title>
</head>
<body>
    <div id="users">
        <form action="engine/do-login.php"method="post">
            <input type="email" class="input" name="email" placeholder="ایمیل شما ..."><br>
            <input type="password" name="password" class="input" placeholder="رمز شما ..."><br>
            <input type="submit"name="do-login"value="ورود به حساب کاربری">
        </form>
    </div>
</body>
</html>