<?php
session_start();

$_SESSION['first_name'] = "himanshu";
$_SESSION['last_name'] = "sangale";

$name = $_SESSION['first_name'] . " " . $_SESSION['last_name'];

echo $name;
echo "<br/>";
print_r($_SESSION);
echo "<br/>";
print_r($_SERVER);
