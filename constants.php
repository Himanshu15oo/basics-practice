<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants</title>
</head>

<body>
    <?php
    $width = 990;
    define("MAX_WIDTH", 800);
    define("USER_WIDTH", $width);
    echo MAX_WIDTH;
    echo "<br />";
    echo $width;
    echo "<br />";
    echo USER_WIDTH;
    ?>
</body>

</html>