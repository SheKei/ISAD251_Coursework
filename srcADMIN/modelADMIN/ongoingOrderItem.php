<?php
/**
 * Created by PhpStorm.
 * User: sheke
 * Date: 01/01/2020
 * Time: 21:30
 */

class ongoingOrderItem
{
    private $itemId;
    private $itemName;
    private $itemQuantity;

    public function __Construct($item, $itemName, $itemAmount)
    {
        $this->itemId=$item;
        $this->itemName=$itemName;
        $this->itemQuantity=$itemAmount;
    }

    public function getId()
    {
        return $this->itemId;
    }

    public function getName()
    {
        return $this->itemName;
    }

    public function getQuantity()
    {
        return $this->itemQuantity;
    }


}