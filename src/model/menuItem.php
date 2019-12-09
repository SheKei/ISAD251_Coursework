<?php


class menuItem
{
    private $name;
    private $sellPrice;


    public function __Construct($name, $sellCost)
    {
        $this->name = $name;
        $this->sellPrice = $sellCost;

    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->sellPrice;
    }


}