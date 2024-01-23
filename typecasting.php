<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TypeCasting</title>
</head>

<body>
    <?php
    $var1 = "7";
    $var2 = $var1 + 3;
    echo $var1;
    echo "<br />";

    echo gettype($var1);
    echo "<br />";
    echo gettype($var2);
    echo "<br />";
    settype($var2, "string");
    echo gettype($var2);
    echo "<br />";
    $var3 = (int) $var1;
    echo gettype($var3);
    ?>
</body>

</html>