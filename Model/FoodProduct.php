<?php

require_once __DIR__ . '/product.php';

class FoodProduct extends Product
{
    private $ingredients;
    private $expiration;

    public function __construct($name, $price, $description, $image, Category $category, array $ingredients, $expiration)
    {
        parent::__construct($name, $price, $description, $image, $category);
        $this->setIngredients($ingredients);
        $this->setExpiration($expiration);
    }

    public function getIngredients()
    {
        return $this->ingredients;
    }

    public function listIngredients()
    {
        return implode(', ', $this->ingredients);
    }

    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;
        return $this;
    }

    public function getExpiration()
    {
        return $this->expiration;
    }

    public function setExpiration($expiration)
    {
        $this->expiration = $expiration;
        return $this;
    }
}
