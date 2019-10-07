<?php


class Squares implements Colorable
{
    protected $width;
    protected $height;
    protected $color;

    public function __construct($width, $height, $color)
    {
        $this->width = $width;
        $this->height = $height;
        $this->color = $color;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function howToColor()
    {
        return "Color shape is: $this->color";
    }
}