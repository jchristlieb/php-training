<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<nav>
    <strong><a href="../index.php">Home sweet home</a></strong>
</nav>
<h1>
    <?php echo "Hello " . $_POST["name"] . ","; ?>
</h1>
<p>thanks for being here and best greetings to <strong><?php echo $_POST["location"] ?></strong>.
</p>
</body>
</html>