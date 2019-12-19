<?php

function showOutput($currentItems, $database)
{
    $breakLine="";

    if($currentItems)
    {
        foreach($currentItems as $currentItem)
        {
            $itemName = $currentItem->getName();
            $price = " Individual Price: £".$currentItem->getSinglePrice();
            $amount = "Quantity: ".$currentItem->getAmount();
            $totalItemPrice = "Total Price: £".$currentItem->getTotalItemPrice();

            $displayString = "<p>".$itemName."  ".$price."  ".$amount."  ".$totalItemPrice."</p>";
            $breakLine = "<br>";

            echo $displayString;
            echo $breakLine;
        }
    }

    echo $breakLine;
    $orderCost = "TOTAL ORDER PRICE: £".$database->calculateTotalOrderPrice($_SESSION['tableNum'], $_SESSION['id']);
    $displayPrice = "<p>".$orderCost."</p>";

    echo $displayPrice;
    echo $breakLine;
}