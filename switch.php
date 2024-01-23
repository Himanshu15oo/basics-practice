<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>

<body>
    <?php $a = 2; ?>
    <?php
    switch ($a) {
        case 0:
            echo "a = 0";
            break;
        case 1:
            echo "a = 1";
            break;
        case 2:
            echo "a = 2";
            break;
    }
    ?>
</body>

</html>