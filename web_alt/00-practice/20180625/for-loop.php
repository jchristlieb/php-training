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
<h1>A number up to thousand with ten numbers in a row</h1>

<?php

for ($i = 1; $i <= 1000;) {
    for ($r = 1; $r <= 10; $r++) {
        echo $i++ . ' ';
    }
    echo '<br>';
}


?>

</body>
</html>