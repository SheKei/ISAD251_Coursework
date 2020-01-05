<?php

class restockItem
{
    private $itemId;
    private $name;
    private $quantity;
    private $reorderAmount;

    public function __construct($id, $theName, $theQuantity, $theReorderAmount)
    {
        $this->itemId = $id;
        $this->name = $theName;
        $this->quantity = $theQuantity;
        $this->reorderAmount = $theReorderAmount;
    }

    public function getId()
    {
        return $this->itemId;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function getReorderAmount()
    {
        return $this->reorderAmount;
    }
}