<?php
/**
 * Created by PhpStorm.
 * User: sheke
 * Date: 03/01/2020
 * Time: 19:45
 */

class order
{
    private $tableNum;
    private $orderNum;
    private $orderDate;

    public function __Construct($table, $orderId, $date)
    {
        $this->tableNum = $table;
        $this->orderNum = $orderId;
        $this->orderDate = $date;
    }

    public function getTableNum()
    {
        return $this->tableNum;
    }

    public function getOrderNum()
    {
        return $this->orderNum;
    }

    public function getOrderDate()
    {
        return $this->orderDate;
    }

}