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
<h1>Bike rental form</h1>

<form action="calculation.php" method="post">
    <div><label>Bike type</label>
        <select name="type" place required>
            <option disabled selected value="">select your preference</option>
            <option value="bike">bike</option>
            <option value="e-bike">e-bike</option>
            <option value="pedelec">pedelec</option>
        </select>
    </div>
    <div>
        <label>Define your rental period</label>
        <input type="number" name="duration" required> days
    </div>
    <input type="submit">
    <input type="reset">
</form>

</body>
</html>