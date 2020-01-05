<?php
/**
 * Created by PhpStorm.
 * User: sheke
 * Date: 04/01/2020
 * Time: 20:40
 */

class orderedItems
{
    private $orderId;
    private $tableNumber;
    private $orderDate;
    private $orderStatus;
    private $itemId;
    private $itemName;
    private $orderQuantity;
    private $totalItemPrice;

    public function __Construct($orderNum, $tableNum, $date, $status, $itemNum, $name, $quantity, $totalPrice)
    {
        $this->orderId = $orderNum;
        $this->tableNumber = $tableNum;
        $this->orderDate = $date;
        $this->orderStatus = $status;
        $this->itemId = $itemNum;
        $this->itemName = $name;
        $this->orderQuantity = $quantity;
        $this->totalItemPrice = $totalPrice;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    public function getTableNumber()
    {
        return $this->tableNumber;
    }

    public function getOrderDate()
    {
        return $this->orderDate;
    }

    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    public function getItemId()
    {
        return $this->itemId;
    }

    public function getName()
    {
        return $this->itemName;
    }

    public function getOrderQuantity()
    {
        return $this->orderQuantity;
    }

    public function getTotalPrice()
    {
        return $this->totalItemPrice;
    }


}