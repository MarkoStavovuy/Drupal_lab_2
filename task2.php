<?php
echo "<h1>Task 2</h1>\n";
function hypotenuse(int $a, int $b)
{
    if (empty($a) || ($a < 0)) {
        echo "<p>Enter correct a!</p>";
    } elseif (empty($b) || ($b < 0)) {
        echo "<p>Enter correct b!</p>";
    } else {
        echo "Hypotenuse c (a:$a, b:$b): " . sqrt(pow($a, 2) + pow($b, 2)) . "\n";
    }

}

hypotenuse(3, 4);

function leg(int $a, int $c)
{
    if (empty($a) || ($a < 0)) {
        echo "<p>Enter correct a!</p>";
    } elseif (empty($c) || ($c < 0)) {
        echo "<p>Enter correct c!</p>";
    } else {
        echo "<br>Leg b (a:$a, c:$c): " . sqrt(pow($c, 2) - pow($a, 2)) . "\n";
    }
}

leg(3, 5);