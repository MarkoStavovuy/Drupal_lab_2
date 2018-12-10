<?php
echo "<h1>Task 4</h1>\n";
function roll(int $number)
{
    switch ($number) {
        case 1:
            return "My dear!";
        case 2:
            return "You are not the worst!";
        case 3:
            return "God loves you!";
        case 4:
            return "Nice try ;)";
        case 5:
            return "Great job :)";
        case 6:
            return "Lucky bastard! :D";
    }
}

$dice1 = mt_rand(1, 6);
$dice2 = mt_rand(1, 6);

echo "<p>Dice1:" . $dice1 . " Label1: " . roll($dice1) . "</p>\n";
echo "<p>Dice2:" . $dice2 . " Label2: " . roll($dice2) . "</p>\n";

if ($dice1 == $dice2) {
    echo "<p><strong>Jackpot!</strong></p>\n";
}
