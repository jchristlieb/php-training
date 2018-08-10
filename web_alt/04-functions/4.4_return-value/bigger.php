<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<nav>
    <strong><a href="/index.php">Home sweet home</a></strong>
</nav>
<h1>Which number is bigger?</h1>

<?php

function bigger($a, $b){
    if ($a > $b){
        echo $a . ' is bigger than ' . $b;
    } elseif ($b > $a){
        echo $b . ' is bigger than ' . $a;
    } else {
        echo 'Sorry dude, both numbers are equal: ' . $a . ' and ' . $b;
    }
}

bigger(5,6);
echo '<br>';
bigger(10000, 9);
echo '<br>';
bigger(-4, -3);
echo '<br>';
bigger(24,24);
echo '<br>';


?>


</body>
</html>