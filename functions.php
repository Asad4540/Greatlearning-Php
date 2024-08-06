<?php
function name($your_name, $your_lastname)
{
    echo "Your First Name is $your_name </br>";
    echo "Your Last Name is $your_lastname </br></br>";
}

name("Asad", "Chaudhary");
name("John", "Doe");

// ---------------------------------------

function CallbyValue ($a) {
    $a=5;
    echo "The value of variable is $a </br>";
}

$b=10;
CallbyValue ($b);
echo "Call by value is $b </br>" ;


function CallbyReference (&$a) {
    $a=5;
    echo "Call by Reference is $a </br>";
}

CallbyReference($b);




