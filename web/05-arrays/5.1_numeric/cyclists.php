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
<h1>Great cyclists by nationality</h1>

<?php

$cyclists = array('Frank Schleck', 'Marco Pantani', 'Emanuel Buchmann', 'Lance Armstrong', 'Peter Sagan' );
$nationality = array('Luxemburg', 'Italy', 'Germany', 'USA', 'Czech Republic');

echo '<table border="1">';
echo '<tr>';
echo '<td><strong>Name</strong></td>';
echo '<td><strong>Alter</strong></td>';
echo '</tr>';
for ($i = 0; $i<=4;$i++){
    echo '<tr>';
    echo '<td>' . $cyclists[$i] . '</td>';
    echo '<td>' . $nationality[$i] . '</td>';
    echo '</tr>';
}


echo '</table>'

?>

</body>
</html>