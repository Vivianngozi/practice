<?php
 
 if(isset($_POST['submit'])) {
 
     $name = array("Edwin", "student", "peter","joy", "blessing");
     $minimum = 5;
     $maximum = 10;
    $username = $_POST['username'];
    $password = $_POST['password'];
 
 //    echo $username;
 //    echo $password;
     if(strlen($username) < $minimum ){
     echo "The username must be more than five";
 
 }
     if(strlen($username) > $maximum ){
     echo "The username must be less than ten";
 
 }
     if(!in_array($username, $name)){
         echo "Sorry you are not allowed";
     } else {
         echo "welcome";
     }
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
      <form action="form.php" method = "post">
      <input type="text" placeholder="Enter name" name = "username"><br>
      <input type="password"  placeholder="Enter password" name ="password"><br>
      <input type="submit" name = "submit">
      </form>
  </body>
  </html>