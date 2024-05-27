<?php
    session_start();

    if(isset($_SESSION['email'])){
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login Admin</h1>

    <form action="./login_process.php" method="POST">
        <div>
        <label for="email">Email: </label><br>
        <input type="email" id="email" name="email"><br>
        </div>
        <br>
        <div>
        <label for="password">Password: </label>
        <input type="password" id="password" name="password"><br>
        </div>
        <br>

        <button type="submit" name="submit">LOGIN</button>
    </form>
</body>
</html>