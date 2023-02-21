<?php

require_once __DIR__ . '/product.php';

class ToyProduct extends Product
{
    private $color;
    private $materials;

    public function __construct($name, $price, $description, $image, Category $category, $color, array $materials)
    {
        parent::__construct($name, $price, $description, $image, $category);
        $this->setColor($color);
        $this->setMaterials($materials);
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    public function getMaterials()
    {
        return $this->materials;
    }

    public function setMaterials($materials)
    {
        $this->materials = $materials;
        return $this;
    }
}
