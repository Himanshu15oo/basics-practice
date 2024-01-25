<?php
$hashed_password = password_hash("himanshu", PASSWORD_BCRYPT);
echo $hashed_password;
echo "<br/>";
echo "<br/>";

$res =  password_verify("himanshu", $hashed_password);
if ($res) {
    echo "Matched";
} else {
    echo "Not Matched";
}
