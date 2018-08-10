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
<h1>Roll the dice</h1>


<table border="1">
    <tr>
        <td>Round</td>
        <td>Player A rolled</td>
        <td>Player A total</td>
        <td>Player B rolled</td>
        <td>Player B total</td>
    </tr>
    <?php


    $sumPlayerA = 0;
    $sumPlayerB = 0;
    $round = 1;

    while ($sumPlayerA < 25 && $sumPlayerB < 25) {
        $diceA = rand(1, 6);
        $sumPlayerA = $sumPlayerA + $diceA;

        $diceB = rand(1, 6);
        $sumPlayerB = $sumPlayerB + $diceB;

        echo '<tr>';
        echo '<td>' . $round . '</td>';
        echo '<td>' . $diceA . '</td>';
        echo '<td>' . $sumPlayerA . '</td>';
        echo '<td>' . $diceB . '</td>';
        echo '<td>' . $sumPlayerB . '</td>';
        echo '</tr>';

        if ($sumPlayerA >=25 or $sumPlayerB >=25){
            echo '<tr>';
            if ($sumPlayerA > $sumPlayerB) {
                echo '<td>';
                echo '<strong>Player A won with ' . $sumPlayerA . ' points in ' . $round . ' rounds!</strong>';
                echo '</td>';
            }
            elseif ($sumPlayerA < $sumPlayerB) {
                echo '<td>';
                echo '<strong>Player B won with ' . $sumPlayerB . ' points in ' . $round . ' rounds!</strong>';
                echo '</td>';
            }
            else {
                echo '<td>';
                echo '<strong>Oh, it is a tie both players scored ' . $sumPlayerB . ' points in ' . $round . ' rounds!</strong>';
                echo '</td>';
            }
            echo '</tr>';
        }

        $round++;


    }

    ?>
</table>

</body>
</html>