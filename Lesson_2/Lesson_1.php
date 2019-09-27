<?php
//Php conditional statements:
//if...
//if...else...
//if...elseif...else
//switch

//if(condition being tested){
//    code to execute
//}

$time = date("H");

if ($time < "20") {
    echo "Good day";
}

echo $time;
//echo $time might not give us our own time zone

if ($time > "10") {
    echo "Good day";
}

echo "<br>";

//if...else...
//if(condition){
//
//}else{
//
//}

$x = 3;
$y = 2;
if($x >= $y){
    echo "variable x is greater than or equal to variable y ";
}else{
    echo "variable x is not equal or greater than variable y ";
}
echo "<br>";
if($x <= $y){
    echo "variable x is not less than or equal to variable y ";
}else{
    echo "variable x is greater than or equal to variable y ";
}

//Check on the other Php conditional statements: