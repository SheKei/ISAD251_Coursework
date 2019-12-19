<?php
/**
 * Created by PhpStorm.
 * User: sheke
 * Date: 19/12/2019
 * Time: 15:37
 */

class orderItem
{
    private $itemId;
    private $itemName;
    private $orderQuantity;
    private $singlePrice;
    private $totalPrice;//Set to zero first and then call another procedure to change value

    public function __Construct($theItemId, $theItemName, $orderAmount, $price)
    {
        $this->itemId = $theItemId;
        $this->itemName = $theItemName;
        $this->orderQuantity = $orderAmount;
        $this->singlePrice = $price;
        $this->totalPrice = 0;
    }

    //Call this after second procedure where we calculate the total price for each item
    public function setTotalItemPrice($thePrice)
    {
        $this->totalPrice = $thePrice;
    }

    //Called when order amount is edited
    public function setAmount($newAmount)
    {
        $this->orderQuantity = $newAmount;
    }

    public function getId()
    {
        $this->itemId;
    }

    public function getName()
    {
        $this->itemName;
    }

    public function getAmount()
    {
        $this->singlePrice;
    }

    public function getTotalItemPrice()
    {
        $this->totalPrice;
    }




}