<?php


class Circle
{
    protected $radius;

    function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }
}