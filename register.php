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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فرم ثبت نام</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="users">
        <form action="engine/do-register.php" method="post">
            <input type="text" name="display-name" class="input" placeholder="نام شما ..."><br>
            <input type="email" class="input" name="email" placeholder="ایمیل شما ..."><br>
            <input type="password" name="password" class="input" placeholder="رمز شما ..."><br>
            <input type="password" name="password-conf" class="input" placeholder="رمز تکرار شما ..."><br>
            <input type="submit"name="do-register"value="ثبت نام">
        </form>
    </div>
</body>
</html>