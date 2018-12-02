<?php
require_once('animal.php');

class Lion implements Animal
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

