<?php
$cookie = " Cookie does not exist!";
if (isset($_COOKIE['user'])) {
    $cookie = $_COOKIE['user'];
}
echo $cookie;

// This will delete the cookie 
setcookie('user', 'himanshu', time() - (60 * 60 * 24 * 7));
