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
<h1>Multiplication table up to 10</h1>

<?php


for ($r = 1; $r <= 10; $r++)
{
    for ($n = 1; $n <= 10; $n++)
    {
        $count = $r * $n;
        echo $count . ' ';
    }
    echo '<br>';
}


?>

</body>
</html>