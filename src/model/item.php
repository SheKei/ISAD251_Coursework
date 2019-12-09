<?php

class item
{
    private $id;
    private $name;
    private $buyCost;
    private $sellCost;
    private $category;
    private $quantity;
    private $reorderMinAmount;
    private $vegan;
    private $vegetarian;
    private $nutFree;
    private $imgPath;
    private $itemStatus;

    public function __Construct($id, $name, $buyCost, $sellCost, $category, $quantity, $reorderMinAmount, $vegan, $vegetarian, $nutFree, $imgPath, $itemStatus)
    {
        $this->id = $id;
        $this->name = $name;
        $this->buyCost = $buyCost;
        $this->sellCost = $sellCost;
        $this->category = $category;
        $this->quantity = $quantity;
        $this->reorderMinAmount = $reorderMinAmount;
        $this->vegan = $vegan;
        $this->vegetarian = $vegetarian;
        $this->nutFree = $nutFree;
        $this->imgPath = $imgPath;
        $this->itemStatus = $itemStatus;
    }

    //SETTERS AND GETTERS FOR ALL ATTRIBUTES

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getBuyCost()
    {
        return $this->buyCost;
    }

    public function getSellCost()
    {
        return $this->sellCost;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function getReorderMinAmount()
    {
        return $this->reorderMinAmount;
    }

    public function getVegan()
    {
        return $this->vegan;
    }

    public function getVegetarian()
    {
        $this->vegetarian;
    }

    public function getNutFree()
    {
        return $this->nutFree;
    }

    public function getImgPath()
    {
        return $this->imgPath;
    }

    public function getItemStatus()
    {
        return $this->itemStatus;
    }


    //SETTERS

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setBuyCost($buy)
    {
       $this->buyCost = $buy;
    }

    public function setSellCost($sell)
    {
        $this->sellCost = $sell;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function setReorderMinAmount($amount)
    {
        $this->reorderMinAmount = $amount;
    }

    public function setVegan($vegan)
    {
        $this->vegan = $vegan;
    }

    public function setVegetarian($vegetarian)
    {
        $this->vegetarian = $vegetarian;
    }

    public function setNutFree($nut)
    {
        $this->nutFree = $nut;
    }

    public function setImgPath($img)
    {
        $this->imgPath = $img;
    }

    public function setItemStatus($status)
    {
        $this->itemStatus = $status;
    }

}