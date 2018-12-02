<?php
require_once('Zoo.php');

$zoo = new Zoo();
$zoo->add(Monkey::class);
$zoo->add(Zebra::class);
$zoo->add(Lion::class);
$zoo->add(Elephant::class);
$zoo->add(Bear::class);
$zoo->generate();
$zoo->showAnimals();
