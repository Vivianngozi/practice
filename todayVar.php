<?php   
    $name = "Vivian";
    $age = 12345;
    $present = true;
    echo "My name is $name and I am $age years old .";
    echo "<br>";
    $a = 1;
    $b = 5;
    echo $a * $b;
    echo "<br>";
    
    echo "My name is $name and I am $age years old ." . "<br>";
    $a = 1;
    $b = 5;
    echo $a * $b . "<br/>";
    echo ($a * $b) + $b - $a / $b ."<br/>";
    
    $user = array('Daniel', 'ss1', '19',23,"adfghj");
    echo "This student name is $user[0] and he is  $user[2] years old , he is in $user[1]" . "<br/>";
    print_r($user) ;

    $person = array ('Name'=>'Daniel',
    'Class'=> 'ss1',
    'Age' => '19'
                                        );
    echo "This student name is  $person[Name]  and he is   $person[Age]  years old  , he is in $person[Class]" ." <br/>" ;
  echo count($user) ."<br>";
  $length_of_user_array = count($user);
  
  for ($x=0;  $x < $length_of_user_array  ;  $x ++) {
      echo $user[$x]. "<br>";
  }
  //loop through an associated array. We are going to be making use of foreach loop
//foreach works for array
  foreach ($user as $key) {
    echo $key ."<br>";

  }
  foreach ($person as $address => $value) {
      echo "$address = $value" . "<br>";
  }
  //while loop
  $mango = 1;
  while ($mango <= 10) {
      echo "we have $mango mango now. <br>";
      $mango++;
  }

  //constant
  define ("Vivian", "She is a lady.");
  echo Vivian ."<br>";

  //superglobals
  $beans =10;
  $rice = 20;

  function emeka() {
      $GLOBALS['foodstuff'] = $GLOBALS['beans'] + $GLOBALS['rice'];
  }
  emeka();
  echo $foodstuff;
  
?>