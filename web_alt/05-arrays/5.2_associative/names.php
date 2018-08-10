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
<h1>Names</h1>

<?php

$names = array("Peter"=>30, "Markus"=>20, "Alfons"=>5, "Anne"=>18, "Judith"=>32);

echo '<table border="1">';
echo '<tr>';
echo '<td><strong>Name</strong></td>';
echo '<td><strong>Alter</strong></td>';
echo '</tr>';
foreach ($names as $name=>$age) {
    echo '<tr>';
    echo '<td>' . $name . '</td>';
    echo '<td>' . $age . '</td>';
    echo '</tr>';
}
echo '</table>';


?>

</body>
</html>