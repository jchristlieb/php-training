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
<h1>Note</h1>

<?php

function note($dev){
    echo '<table border="1">';
    echo '<tr>';
    echo '<td>This program was created by ' . $dev . '</td>';
    echo '</tr>';
    echo '</table>';
}

?>

<p>Air plant try-hard schlitz, church-key cliche swag lo-fi vice retro copper mug austin. Green juice ennui fanny pack,
    retro chartreuse poutine flexitarian wolf. Intelligentsia banjo vinyl franzen, thundercats waistcoat copper mug
    drinking vinegar literally butcher.</p>

<?php note(Jan); ?>

<p>Air plant try-hard schlitz, church-key cliche swag lo-fi vice retro copper mug austin. Green juice ennui fanny pack,
    retro chartreuse poutine flexitarian wolf. Intelligentsia banjo vinyl franzen, thundercats waistcoat copper mug
    drinking vinegar literally butcher.</p>

<?php note(Max); ?>

</body>
</html>