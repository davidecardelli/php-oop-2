<?php

require_once __DIR__ . '/product.php';

class KennelProduct extends Product
{
    private $color;
    private $size;

    public function __construct($name, $price, $description, $image, Category $category, $color, $size)
    {
        parent::__construct($name, $price, $description, $image, $category);
        $this->setColor($color);
        $this->setSize($size);
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->$color = $color;
        return $this;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        $this->size = $size;
        return $this;
    }
}
