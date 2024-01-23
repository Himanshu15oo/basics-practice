<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Structures (Loops)</title>
</head>

<body>
    <?php
    // While Loop 
    $nextLine = "<br />";
    $count = 0;
    while ($count <= 10) {
        echo "Count is " . $count . $nextLine;
        $count++;
    }
    echo "Count outside loop is " . $count;

    echo $nextLine;
    echo $nextLine;

    $count = 0;
    while ($count <= 10) {
        if ($count == 7) {
            echo "Seven" . $nextLine;
        } else {
            echo "Count is " . $count . $nextLine;
        }
        $count++;
    }
    echo "Count outside loop is " . $count . $nextLine;

    $rows = 10;
    $cols = 12;
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo "*";
        }
        echo $nextLine;
    }

    echo $nextLine;
    // ForEach 
    $ages = array(12, 15, 19, 23, 27);
    echo "Ages: ";
    foreach ($ages as $age) {
        echo $age . ", ";
    }

    // Break statement 
    echo $nextLine;
    echo $nextLine;
    echo "Ages: ";
    for ($i = 0; $i < count($ages); $i++) {
        echo $ages[$i];
        if ($i == (count($ages) - 1)) {
            break;
        }
        echo ", ";
    }

    // Pointers 
    echo $nextLine;
    echo $nextLine;
    echo "Initial Pointer position: " . current($ages) .  $nextLine;
    next($ages);
    echo "Next: " . current($ages) .  $nextLine;
    reset($ages);
    echo "Reset: " . current($ages) .  $nextLine;

    while ($age = current($ages)) {
        echo $age . ", ";
        next($ages);
    }
    ?>
</body>

</html>