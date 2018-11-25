<?php
require_once("header.tpl.php");
echo "<h1>Task 2</h1>\n";
function hypotenuse(int $a, int $b)
{
    if (!isset($a) || empty($a) || ($a < 0)) {
        echo "<p>Enter correct a!</p>";
    } elseif (!isset($b) || empty($b) || ($b < 0)) {
        echo "<p>Enter correct b!</p>";
    } else {
        echo "Hypotenuse ($a,$b): " . sqrt(pow($a, 2) + pow($b, 2))."\n";
    }

}

hypotenuse(3, 4);
require_once("footer.tpl.php");