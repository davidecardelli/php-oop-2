<?php

require_once __DIR__ . '/category.php';

class Product
{
    private $id;
    private $name;
    private $price;
    private $description;
    private $image;
    private $category;

    public function __construct($name, $price, $description, $image, Category $category)
    {
        $this->setId();
        $this->setName($name);
        $this->setPrice($price);
        $this->setDescription($description);
        $this->setImage($image);
        $this->setCategory($category);
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId()
    {
        $this->id = uniqid();
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }
}
