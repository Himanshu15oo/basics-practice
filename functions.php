<?php

function hello($name)
{
    echo "Hello {$name}! <br/>";
}

hello("Himanshu");
hello("Everyone");

function add($val1, $val2)
{
    return $val1 + $val2;
}

function sub($val1, $val2)
{
    return $val1 - $val2;
}

echo add(2, 3);
echo "<br />";
echo sub(5, 3);
echo "<br />";

function say_hello($name = "Himanshu", $greet = "Everyone", $punc = ".")
{
    echo "Hello from {$name} to {$greet}{$punc} <br/>";
}

say_hello();
say_hello("Pratik", "Classmates", "!");
