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
<h1>Notes with parameter</h1>

<?php

function note($firstname, $surname, $category)
{
    $firstletter = substr($firstname, 0,1);
    $email = strtolower($firstletter).'.'.strtolower($surname).'@example.com';
    echo '<table border="1">';
    echo '<tr>';
    echo '<td>Written by ' . $firstname .' '. $surname . ' in ' . $category . '</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>Mail to: ' . $email .'</td>';
    echo '</tr>';
    echo '</table>';
}

?>

<?php note(Jan, Christlieb, Tech); ?>
<p>Air plant try-hard schlitz, church-key cliche swag lo-fi vice retro copper mug austin. Green juice ennui fanny pack,
    retro chartreuse poutine flexitarian wolf. Intelligentsia banjo vinyl franzen, thundercats waistcoat copper mug
    drinking vinegar literally butcher.</p>
<?php note(Simon,Yates, Cycling); ?>
<p>Air plant try-hard schlitz, church-key cliche swag lo-fi vice retro copper mug austin. Green juice ennui fanny pack,
    retro chartreuse poutine flexitarian wolf. Intelligentsia banjo vinyl franzen, thundercats waistcoat copper mug
    drinking vinegar literally butcher.</p>


</body>
</html>