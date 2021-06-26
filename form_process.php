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