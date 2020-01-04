<?php

function showOutput($currentItems)
{
    $breakLine="";

    if($currentItems)
    {
        $totalPrice = 0;

        foreach($currentItems as $currentItem)
        {
            $totalPrice =(float) $totalPrice + (float)$currentItem->getTotalItemPrice();

            $itemName = "<Strong>Item Name:</Strong> ".$currentItem->getName();
            $price = "<Strong>Individual Price:</Strong> £".$currentItem->getSinglePrice();
            $amount = "<Strong>Quantity:</Strong> ".$currentItem->getAmount();
            $totalItemPrice = "<Strong>Total Price:</Strong> £".$currentItem->getTotalItemPrice();

            $displayString = "<p>".$itemName." --- ".$price." --- ".$amount." --- ".$totalItemPrice."</p>";
            $breakLine = "<br>";

            echo $displayString;
            echo $breakLine;
        }

        echo $breakLine;
        $orderCost = "<Strong>TOTAL ORDER PRICE:</Strong> £".(float)$totalPrice;
        $displayPrice = "<p class='text-right'>".$orderCost."</p>";

        echo $displayPrice;
        echo $breakLine;
    }


}

function showConfirmedItems($items)
{
    if($items)
    {
        $once = 1;
        $totalOrderPrice = 0;


        echo "<div class='container' style='font-size: 25px; padding: 20px;'>";

        foreach($items as $item)
        {
            if($once==1)
            {
                $orderStatus = "<p><Strong>ORDER STATUS: ".$item->getStatus()."</p>";
                $orderId = "<p><Strong>ORDER ID:".$item->getOrderId()."</p><br>";

                echo $orderStatus;
                echo $orderId;
                $once = 2;
            }

            $totalOrderPrice = (float)$totalOrderPrice + (float)$item->getTotalItemPrice();

            $itemName = "<p><Strong>Item Name:</Strong> ".$item->getName()."</p>";
            $price = "<p><Strong>Individual Price:</Strong> £".$item->getSinglePrice()."</p>";
            $amount = "<p><Strong>Quantity:</Strong> ".$item->getAmount()."</p>";
            $totalItemPrice = "<p><Strong>Total Price:</Strong> £".$item->getTotalItemPrice()."</p><br>";

            echo $itemName;
            echo $price;
            echo $amount;
            echo $totalItemPrice;

        }

        $totalOrder = "<p><Strong>Total Order Price:</Strong> £".(float)$totalOrderPrice."</p><br><br>";
        echo $totalOrder;
        echo "</div>";

    }

}