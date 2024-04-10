<?php

class Hero
{
    public $name;
    public $power;

    public function __construct($name, $power)
    {
        $this->name = $name;
        $this->power = $power;
    }
}