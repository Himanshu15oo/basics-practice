<?php

use function PHPSTORM_META\type;

$a = 12;
$b = 99;
if ($a > $b) {
    echo "A is greater! A = $a B = $b";
} else {
    echo "B is greater! A = $a B = $b";
}
echo "<br />";
$a = 99;
if ($a == $b) {
    echo "Both are equal! A = $a B = $b";
} else {
    echo "Both are not equal! A = $a B = $b";
}
echo "<br />";
echo "<br />";
echo "<br />";

$age = 17;
$decision = $age == 18;
echo "Age: $age ";
echo "<br />";
if ($decision) {
    echo "You are eligible for driving license.";
} elseif ($age < 18) {
    echo "You are not eligible for driving license!";
}

echo "<br />";

if (($age < 18) && ($age >= 16)) {
    echo "You are eligible for learnings license!";
}
