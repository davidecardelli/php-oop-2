<?php

class Category
{
    private $id;
    private $name;
    private $icon;

    public function __construct($name, $icon)
    {
        $this->setId();
        $this->setName($name);
        $this->setIcon($icon);
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

    public function getIcon()
    {
        return $this->icon;
    }

    public function setIcon($icon)
    {
        $this->icon = $icon;
        return $this;
    }
}
