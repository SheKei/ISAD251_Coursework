<?php


class menuItem
{
    private $id;
    private $name;
    private $sellPrice;
    private $vegan;
    private $vegetarian;
    private $nutFree;
    private $imgPath;


    public function __Construct($id,$name, $sellCost, $vegan, $vegetarian, $nutFree, $imgPath)
    {
        $this->id = $id;
        $this->name = $name;
        $this->sellPrice = $sellCost;
        $this->vegan = $vegan;
        $this->vegetarian = $vegetarian;
        $this->nutFree = $nutFree;
        $this->imgPath = $imgPath;

    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->sellPrice;
    }

    public function getVegan()
    {
        return $this->vegan;
    }

    public function getVegetarian()
    {
        return $this->vegetarian;
    }

    public function getNutFree()
    {
        return $this->nutFree;
    }

    public function getImgPath()
    {
        return $this->imgPath;
    }


}