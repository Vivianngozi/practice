<?php
    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        echo $password . "<br>" . $username;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="assign_form.php" method = "post">
        <input type="text" name ="username">
        <input type="password" name ="password">
        <input type="submit" name ="submit">
    </form>
</body>
</html>