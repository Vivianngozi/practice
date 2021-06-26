<?php
$number1 = 10;
$number2 = 20;
echo $number1 + $number2;
echo "<br>";
$first = array(10, 22, 'hi');
$second = array('name'=>'samson', 'class' =>'ss2', );
echo $second['class'] . "<br>";
echo  $first[0];
if (4 === "4" || 5 < 10) {
    echo "it is true <br>";
}
$test = 30;
switch($test) {
    case 34:
        echo "it is 34";
    break;
    case 37:
        echo "it is 37";
    break;
    case 24:
        echo "it is 24";
    break;
    case 54:
        echo "it is 54";
    break;
    default :
    echo "Nothing was found";

}
$counter = 0;
while ($counter < 10) {
    echo "<br> it is less than 10 <br>";
    echo $counter;
    // $counter = $counter + 1;
    //$counter++; it is d same with d above
    $counter+=2;
}

for ($count = 0; $count < 10; $count++) {
    echo "<br>" . $count;
}
print "hi <br>";

$x = 6;
do {
    echo "The number is: $x <br>";
    $x++;
}
while ($x <= 5);
$colours = array('red', 'blue', 'green');

foreach ($colours as $value) {
    echo $value . "<br>";
}

$age = array('Peter' => "35", 'Ben' => "37", 'John' => "29");

foreach($age as $x =>$val) {
    echo "$x = $val <br>";
}
if (4 > 2){
    echo "I love php <br>";
}
elseif (4 < 2) {
    echo "I hate php";
}
else {
    echo "I don't know if I like it or not";
}

for ($q = 1; $q <= 10; $q ++) {
    echo $q . "<br>";
}

$learn = 45;
switch ($learn) {
    case 23:
        echo "It is 23";
        break;
    case 237:
        echo "It is 237";
        break;
    case 34:
        echo "It is 34";
        break;
    case 43:
        echo "It is 43";
         break;
     case 234:
        echo "It is 234";
        break;
        default:
        echo "it is correct";
        break;
}

//functions
function saySomething() {
    echo "<br> Get the fuck out of my sight <br>";
}

saySomething();

//multiple functions
function init() {
    talk();
    echo "<br>";
    shout();
}
function talk() {
    echo 456 + 235;
}
function shout() {
    echo "I am shout";
}
init();

function greeting($message) {
    echo $message;
}
greeting("<br> Hello Student");

//Return values from functions


function addition($initial, $final) {
    $sum = $initial + $final ;
    echo "<br>";
    echo $sum;
    echo "<br>";
}
addition(234, 234);

function addNumber($num1, $num2) {
    $sum = $num1 + $num2;
    return $sum;
}
$result = addNumber(23, 23);
echo $result;
echo "<br>";

$result = addNumber(100, $result);
echo $result;


//Global variable
$s = "outside"; //global

function convert(){
    global $s;
    $s  = "inside"; //local
}
echo "<br>";
echo $s;
echo "<br>";
convert();
echo $s;

//constant
define("NAME",  12357);
echo "<br>";
echo NAME;

//classwork
function classwork($initialNumber1, $initialNumber2) {
    $add = $initialNumber1 + $initialNumber2;
    return $add;
}
$answer = classwork(12, 23);
echo "<br>";
echo $answer;


function passing(){
    echo "<br>";
    firstpass();
    echo "<br>";
    secondpass();
}
function firstpass() {
    echo "This is the first parameters";
}
function secondpass() {
    echo "This is the second parameters";
}
passing();

function classworks() {
    $initialNumbers1 = 12;
    $initialNumbers2 = 45;
    $adds = $initialNumbers1 + $initialNumbers2;
    return $adds;
}
$answers = classworks();
echo "<br>";
echo $answers;
echo "<br>";

function hola($hello) {
    echo $hello;
}
hola("Hey, is this spanish?");

//math function
echo "<br>";
echo pow(2, 7);
echo "<br>";
echo rand(1, 12345);
echo "<br>";
echo sqrt(100);
echo "<br>";
echo ceil(10.5); //round up
echo "<br>";
echo floor(10.7); //round down
echo "<br>";
echo round(10.7);


$list = [234, 123, 2344, 987, 374, 394, 2356348];
echo max($list) . "<br>";
echo min($list) ."<br>";
sort($list) . "<br>";
print_r($list);
 

$string = "shut the fuck up, stop saying blablabla";
echo "<br>";
echo strlen($string);
echo "<br>";
echo strtoupper($string);
echo "<br>";
echo strtolower($string) . "<br>";


//in_array
$were = "tryduedfrgthyjuiop;lkjghffv";
$echo = ['sdfghjk', 3456, 'asdfgh', 234, $were];
$found = in_array($were, $echo);
if($found){
    echo "We did it together";
} else {
    "we fuck up";
}

?>