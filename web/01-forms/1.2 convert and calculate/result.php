<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<nav>
    <strong><a href="../../index.php">Home sweet home</a></strong>
</nav>
<h1>Square of a number</h1>

<?php
$number = floatval($_POST['number']);
$result = $number * $number;
?>

<p>The square root of <strong><?php echo $number ?></strong> is <strong><?php echo $result ?></strong>.</p>

</body>
</html>