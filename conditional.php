<?php
$age = 20;

if ($age > 18) {
    echo "you are eligible to vote </br>";
} elseif ($age < 18) {
    echo "you are not eligible to vote </br>";
} else {
    echo "Congrats you just turned 18 and you are eligible </br>";
}

//Switch case

switch ($age) {
    case 18:
        echo "you are eligible";
        break;
    case 15:
        echo "you are not eligible to vote";
        break;
    default:
        echo "please select 15 or 18";
}
