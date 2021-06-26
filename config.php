<?php
//simple application
//prepared statemrnts

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
$connect = new mysqli(
    $servername, $username, $password, $dbname
);

if ($connect->connect_error){
    die("connection failed".$connect->connect_error);
}
else {
    echo "<marquee><h1 style='color:purple'>Connection Successful</h1></marquee>"."<br>";
}

//prepare statement
$sql = $connect->prepare ("INSERT INTO users (username, password, email)
VALUES (?, ?, ?)");

//bind
$sql->bind_param ("sss", $user_name, $userpassword, $email);

$user_name = $_POST["user_name"];
$userpassword = $_POST["userpassword"];
$email = $_POST["email"];
$testing_the_mic = $sql->execute();

if ($testing_the_mic = TRUE) {
    echo "Registration Successful";
}
else {
    echo "Something went wrong";
}
?>