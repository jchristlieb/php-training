<?php
//
//// require the composer autoloader
//require_once dirname(__DIR__) . '/vendor/autoload.php';
//
//// require bootstrap.php which contains some pre-defined constants
//require_once dirname(__DIR__) . '/app/bootstrap.php';
//
//
//?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="../public/bundle.js" defer></script>
</head>
<body>
<h1>Learn PHP</h1>
<div class="alert alert-primary" role="alert">
    This is a primary alert—check it out!
</div>
<h2>1. Forms and data processing</h2>
<h3>1.1 Build a form and display the input</h3>
<ul>
    <li>Task: Build a form that enables a user to fill in a name and an address. Display the data when the user hits
        submit.
    </li>
    <li>Example: <a href="01-forms/1.1_build_and_display/form.php">A short form with simple data processing</a></li>
    <li>Github: <a
                href="https://github.com/jchristlieb/php-training/tree/master/web/01-forms/1.1_build_and_display"
                target="_blank">View the code base</a></li>
</ul>
<h3>1.2 Convert and calculate data inputs</h3>
<ul>
    <li>Task: Build a form that asks to enter a number. Convert the string into a number. Multiply the number with
        itself and display the result.
    </li>
    <li>Example: <a href="01-forms/1.2_convert_and_calculate/number.php">Enter a number</a></li>
    <li>Github: <a
                href="https://github.com/jchristlieb/php-training/tree/master/web/01-forms/1.2_convert_and_calculate"
                target="_blank">View the code base</a></li>
</ul>
<h2>2. Statements</h2>
<h3>2.1 If and else</h3>
<ul>
    <li>Task:Design an estimation question. Evaluate the user input and provide the answer</li>
    <li>Example:<a href="02-statements/2.1_if_else/question.php">Imagine a blank sheet of paper ...</a></li>
    <li>GitHub: <a
                href="https://github.com/jchristlieb/php-training/tree/master/web/02-statements/2.1_if_else"
                target="_blank">View the code base</a></li>
</ul>
<h3>2.2 Switch and case</h3>
<ul>
    <li>Task: Build a bike rental form. The user may chose among three different types: bike(10€/day), e-bike(15€/day),
        and pedelec(20€/day). Further, the user needs to indicate the rental length in days. As a result display the
        user selection and the total costs for the bike rental.
    </li>
    <li>Example: <a href="02-statements/2.2_switch_case/form.php">Bike rental form</a></li>
    <li>Github: <a
                href="https://github.com/jchristlieb/php-training/tree/master/web/02-statements/2.2_switch_case"
                target="_blank">View the code base</a></li>
</ul>

<h2>3. Loops</h2>
<h3>3.1 For-Loops</h3>
<ul>
    <li>Task:Create a multiplication table up to 10. Each row should consist of ten numbers.</li>
    <li>Example:<a href="03-loops/3.1_for/multiplication-table.php">Multiplication table</a></li>
    <li>GitHub: <a
                href="https://github.com/jchristlieb/php-training/tree/master/web/03-loops/3.1_for"
                target="_blank">View the code base</a></li>
</ul>
<h3>3.2 While-Loops</h3>
<ul>
    <li>Task: Create a simple dice game for two players. In each round the player roll the dice once. Add the dice
        points of each player. As soon as one player reaches 25 or more points the game is over and the player with the
        highest points wins the game.
    </li>
    <li>Example:<a href="03-loops/3.2_while/dice-game.php">Dice game</a></li>
    <li>GitHub: <a
                href="https://github.com/jchristlieb/php-training/tree/master/web/03-loops/3.2_while"
                target="_blank">View the code base</a></li>
</ul>


<h2>4. Functions</h2>
<h3>4.1 Basic</h3>
<ul>
    <li>Task: Write a simple function that can be used to reference the author for a text.</li>
    <li>Example:<a href="04-functions/4.1_basic/note.php">A hipster ipsum note</a></li>
    <li>GitHub: <a
                href="https://github.com/jchristlieb/php-training/tree/master/web/04-functions/4.1_basic"
                target="_blank">View the code base</a></li>
</ul>
<h3>4.2 Parameter</h3>
<ul>
    <li>Task: Write a simple program that calculates the square root of a given number and displays the result
        accordingly.
    </li>
    <li>Example:<a href="04-functions/4.2_single-parameter/square.php">Calculate the square root.</a></li>
    <li>GitHub: <a
                href="https://github.com/jchristlieb/php-training/tree/master/web/04-functions/4.2_single-parameter"
                target="_blank">View the code base</a></li>
</ul>
<h3>4.3 Multiple Parameter</h3>
<ul>
    <li>Task: Write a simple program that calculates the mean value of three given numbers</li>
    <li>Example:<a href="04-functions/4.3_multiple-parameter/mean.php">Calculate the mean value.</a></li>
    <li>GitHub: <a
                href="https://github.com/jchristlieb/php-training/tree/master/web/04-functions/4.3_multiple-parameter"
                target="_blank">View the code base</a></li>
</ul>
<h3>4.4 Return value</h3>
<ul>
    <li>Task: Write a function bigger($a, $b) that asks for two numbers as parameters and returns the bigger value of
        the two inputs.
    </li>
    <li>Example:<a href="04-functions/4.4_return-value/bigger.php">The bigger one</a></li>
    <li>GitHub: <a
                href="https://github.com/jchristlieb/php-training/tree/master/web/04-functions/4.4_return-value"
                target="_blank">View the code base</a></li>
</ul>
<h3>4.5 Reference</h3>
<ul>
    <li>Task: Write a function calc() with two input parameters. It should return two results, the sum and the product
        of the two inputs. To transfer the variables use the <strong>call-by-reference</strong>.
    </li>
    <li>Example:<a href="04-functions/4.5_reference/calc.php">Calc the sum and product of $x and $y.</a></li>
    <li>GitHub: <a
                href="https://github.com/jchristlieb/php-training/tree/master/web/04-functions/4.5_reference"
                target="_blank">View the code base</a></li>
</ul>
<h2>5. Arrays</h2>
<h3>5.1 Numeric</h3>
<ul>
    <li>Task: Save the name of five inspiring people with their nationality within two arrays. One for the names and one
        for the nationality. Print those arrays next to each other with a for-loop.
    </li>
    <li>Example:<a href="05-arrays/5.1_numeric/cyclists.php">5 great cyclists</a></li>
    <li>GitHub: <a
                href="https://github.com/jchristlieb/php-training/tree/master/web/05-arrays/5.1_numeric/"
                target="_blank">View the code base</a></li>
</ul>
<h3>5.2 Associative</h3>
<ul>
    <li>Task: Build an associative array with 5 random chosen names as keys and an random picked age as value. Print the
        keys and values in a table.
    </li>
    <li>Example:<a href="05-arrays/5.2_associative/names.php">5 people and their age</a></li>
    <li>GitHub: <a
                href="https://github.com/jchristlieb/php-training/tree/master/web/05-arrays/5.2_associative/"
                target="_blank">View the code base</a></li>
</ul>
</body>
</html>

