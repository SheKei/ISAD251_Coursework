<?php
/**
 * Created by PhpStorm.
 * User: sheke
 * Date: 19/12/2019
 * Time: 12:44
 */

class order
{
    private $tableNumber;
    private $orderId;

    public function __Construct($tableNum, $orderNum)
    {
        $this->tableNumber = $tableNum;
        $this->orderId = $orderNum;
    }

    public function getTableNum()
    {
        return $this->tableNumber;
    }

    public function  getOrderId()
    {
        return $this->orderId;
    }

}