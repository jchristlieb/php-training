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
<h1>Calculate the square</h1>

<?php

function square($number){

    $result = $number * $number;
    echo 'The square of ' . $number . ' is ' . $result;
}

square(3);
echo '<br>';
square(3.2);
echo '<br>';
square(-5);
echo '<br>';
square(83373);

?>



</body>
</html>