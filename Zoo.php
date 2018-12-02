<?php
require_once('Monkey.php');
require_once('Zebra.php');
require_once('Lion.php');
require_once('Elephant.php');
require_once('Bear.php');

class Zoo
{
    private $animals = [];
    private $generateAnimals = [];

    public function add($className)
    {
        $this->animals[] = $className;
    }

    public
    function generate()
    {
        for ($i = 0; $i < 20; $i++) {
            $randomDigit = mt_rand(0, count($this->animals) - 1);
            $obj = call_user_func([$this->animals[$randomDigit], 'create']);
            $this->generateAnimals[] = $obj;
        }
        return $this->generateAnimals;
    }

    public
    function showAnimals()
    {
        echo "Zoo containts:<br>";
        foreach ($this->generateAnimals as $animal) {
            echo $animal->getName($animal) . "<br>";
        }
    }
}
