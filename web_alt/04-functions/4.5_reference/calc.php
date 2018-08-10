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
<h1>Calc (call-by-reference method)</h1>

<?php

function calc(&$a, &$b){
    $sum = $a + $b;
    $product = $a * $b;
    echo 'The sum of ' . $a . ' and ' . $b . ' is ' . $sum;
    echo '<br>';
    echo 'The product of ' . $a . ' and ' . $b . ' is ' . $product;
}

$x = 5;
$y = 7;
calc($x, $y);



?>

</body>
</html>