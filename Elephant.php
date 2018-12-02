<?php
require_once('animal.php');

class Elephant implements Animal
{
    public function getName()
    {
        return __CLASS__ . ": " . md5(serialize(new self()));

    }

    public static function create()
    {
        return new static();
    }
}

