<?php
// if statement
$q = 10;
$s = 19;
$r = $s;

if($q > $s) {
    echo "Q is older than S";
}
elseif ($r = $s) {
    echo "R is the same age as S <br>";
}
else {
    echo "Q is younger than S";
}

// for greeting
$time = date('h');
echo $time ."<br/>";

if($time < 12) {
    echo "Good Morning";
}
elseif ($time == 12 && $time < 15) {
    echo "Good Afternoon";
}
else {
    echo "Good Evening";
}

$post = "name";

if (empty($post)) {
    echo "<br> there is nothing there";
}
elseif (!empty($post)) {
    echo "<br> there is something there";
}
if (!isset($post)){
    echo "<br> Who said my sushi";
}
?>