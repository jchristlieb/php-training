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
$duration = $_POST['duration'];
$costs = '';

switch ($_POST['type']) {

    case 'bike':
        $costs = 10 * $duration;
        break;

    case 'e-bike':
        $costs = 15 * $duration;
        break;

    case 'pedelec':
        $costs = 20 * $duration;
        break;

    default:
        echo 'Error';
}

?>

<h1>Bike rental costs</h1>

<p>Your rental information:</p>
<ul>
    <li>bike type: <strong><?php echo $_POST['type'] ?></strong></li>
    <li>duration: <strong><?php echo $duration ?> day(s)</strong></li>
    <li>costs: <strong><?php echo $costs . '€' ?></strong></li>
</ul>

<p>Ride save.</p>


</body>
</html>