<?php
/**
 * Created by PhpStorm.
 * User: sheke
 * Date: 05/01/2020
 * Time: 20:33
 */

class homeReport
{
    private $totalIncome;
    private $totalOrders;
    private $totalBuyingCosts;
    private $totalItemsSold;

    public function __Construct($income, $orders, $cost, $items)
    {
        $this->totalIncome = $income;
        $this->totalOrders = $orders;
        $this->totalBuyingCosts = $cost;
        $this->totalItemsSold = $items;
    }

    public function getIncome()
    {
        return $this->totalIncome;
    }

    public function getOrders()
    {
        return $this->totalOrders;
    }

    public function getCosts()
    {
        return $this->totalBuyingCosts;
    }

    public function getItems()
    {
        return $this->totalItemsSold;
    }

}