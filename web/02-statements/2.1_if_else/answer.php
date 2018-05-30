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

$sheets = floatval($_POST['sheets']);
$comment = '';

if ($sheets == 23000) {
    $comment = 'Great, your answer is correct. You would need indeed 23000 sheets. Crazy isn\'t it?';
} else if($sheets < 23000) {
    $div = 23000 - $sheets;
    $comment = 'Nope, its more than that. Indeed you would need ' . $div . ' more sheets!';
} else {
    $div = $sheets -23000;
    $comment = 'Nope, its less than that. Indeed, cut ' . $div . ' sheets from your guess and you are about right';
}
?>


<h1>Inequality</h1>

<p><strong><?php echo $comment ?></strong></p>

<ul>
    <li>Your answer: <?php echo $sheets ?> sheets</li>
    <li>Correct answer: 23000 sheets</li>
</ul>



</body>
</html>