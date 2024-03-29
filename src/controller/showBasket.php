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

            $cancelButton = "<button class='w3-button w3-black w3-round-large' type='button'><a style='color: white' href='basket.php?objectId=".$currentItem->getItemId()."'>CANCEL ITEM</a></button>";

            $displayString = "<p>".$itemName." --- ".$price." --- ".$amount." --- ".$totalItemPrice." ----- ".$cancelButton."</p>";
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


//Show order items that have been confirmed
function showConfirmedItems($items, $orderType)
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

                if($orderType == "Confirmed - Ongoing") //Cancel functionality only for orders that have not been delivered
                {
                    $cancelButton = "<button class='w3-button w3-black w3-round-large' type='button'><a style='color: white' href='../../src/controller/cancel.php?orderId=".$item->getOrderId()."'>CANCEL ORDER</a></button>";
                    echo $cancelButton;

                }
            }

            //Calculate total price from total item price
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