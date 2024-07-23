<?php

$var1 = "hello";
$var2 = "world";
echo $var1 . "</br>";
echo $var2 . "</br>";

//Local Variable

function marks()
{
    $marks = 90;
    echo "local variable marks is : " . $marks;
    echo "</br>";
}
marks();

//Global variable
$score = 50;
function scorecard()
{
    global $score;
    echo "global variable score is : " . $score;
    echo "</br>";
}
scorecard();

echo "global score : $score </br>"; //another way of writing echo
echo ("Parenthesis Echo : $score </br></br>");

//Static variable
function staticc() {
    static $marks = 10;
    $marks++;
    echo "static marks is : $marks </br>";
}

staticc();//value goes on increasing as long as you keep function executing
staticc();
staticc();
