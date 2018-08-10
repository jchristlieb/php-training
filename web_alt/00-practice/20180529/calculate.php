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

<?php
$input = floatval($_POST['number']);
$result = $input * $input;
?>

<h1>Square of your number</h1>
<p>Thanks for submitting a <?php echo $input ?>. The square of <?php echo $input ?> is <?php echo $result ?>.</p>
</body>
</html>