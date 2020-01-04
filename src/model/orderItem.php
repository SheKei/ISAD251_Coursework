<?php
/**
 * Created by PhpStorm.
 * User: sheke
 * Date: 19/12/2019
 * Time: 15:37
 */

class orderItem
{
    private $tableNumber;
    private $orderId;
    private $itemOrderStatus;
    private $itemName;
    private $orderQuantity;
    private $singlePrice;
    private $totalPrice;//Set to zero first and then call another procedure to change value

    public function __Construct($tableNum,$theOrderId, $status, $theItemName, $orderAmount, $price, $theTotalPrice)
    {
        $this->tableNumber = $tableNum;
        $this->orderId = $theOrderId;
        $this->itemOrderStatus = $status;
        $this->itemName = $theItemName;
        $this->orderQuantity = $orderAmount;
        $this->singlePrice = $price;
        $this->totalPrice = $theTotalPrice;
    }

    public function getTableNum()
    {
        return $this->tableNumber;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    public function getStatus()
    {
        return $this->itemOrderStatus;
    }

    public function getName()
    {
        return $this->itemName;
    }

    public function getAmount()
    {
        return $this->orderQuantity;
    }

    public function getSinglePrice()
    {
        return $this->singlePrice;
    }

    public function getTotalItemPrice()
    {
        return $this->totalPrice;
    }




}