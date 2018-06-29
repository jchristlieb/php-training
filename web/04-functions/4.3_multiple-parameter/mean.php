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
<h1>The mean value</h1>

<?php

function average($a,$b, $c){
    $result = ($a + $b + $c) / 3;
    echo 'The mean of ' . $a . ', ' . $b . ' and ' . $c . ' is<strong> ' . $result . '</strong>';
}

average(10, 20, 30);
echo '<br>';
average(4,7,6);
echo '<br>';
average(44,67.5,1);
echo '<br>';
average(-0.001, 0.0081, 0.0032);
echo '<br>';
average(5,8,2);

?>

</body>
</html>