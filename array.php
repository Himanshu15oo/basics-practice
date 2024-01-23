<?php
$array = array(4, 8, 95, 23, 45);
echo $array; ?>
<br />
<?php
print_r($array);
?>
<br />

Count: <?php echo count($array); ?>
<br />

Max: <?php echo max($array); ?>
<br />

Sort:
<pre>
<?php sort($array);
print_r($array) ?>
</pre>
<br />

Reverse Sort:
<pre>
    <?php sort($array);
    print_r($array) ?>
</pre>
<br />

Implode: <?php echo $string = implode(" * ", $array) ?>
<br />
Explode: <?php print_r(explode(" * ", $string)) ?>
<br />