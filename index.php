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
}

scorecard();
