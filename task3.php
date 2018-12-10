<?php
echo "<h1>Task 3</h1>\n";
function sum(int $n)
{
    if (!empty($n) && ($n > 1)) {
        $sum = 0;
        for ($i = 1; $i <= $n; $i++) {
            $sum += $i;
        }
        echo "<p>The result of the sum(1,$n): " . $sum . "</p>\n";
    } else {
        echo "<p>The number must be greater than 1!</p>\n";
    }
}

sum(6);