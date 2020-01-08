<?php

include_once '../../srcADMIN/modelADMIN/DB_Admin.php';

function getOrderItems($id)
{
    $db = new DB_Admin();

    $orderItems = $db->getOrderItemsForOrder($id); //Get items for a particular order id

    $onlyOnce = 1;

    if($orderItems) //Output items
    {

        foreach($orderItems as $item)
        {
            if($onlyOnce == 1)
            {
                echo "<div style='padding: 20px;overflow-x:auto;' class='col-lg-12 text-center'>";
                echo $orderId = "<p>ORDER ID:<strong> ".$item->getOrderId()."</strong></p>";
                echo $tableNumber = "<p>TABLE NUMBER:<strong> ".$item->getTableNumber()."</strong></p>";
                echo $orderDate = "<p>ORDER DATE:<strong> ".$item->getOrderDate()."</strong></p>";
                echo $orderStatus = "<p>ORDER STATUS:<strong> ".$item->getOrderStatus()."</strong></p>";
                echo "</div>";

                echo "<div style='padding:40px; margin-left: 300px;' class='col-lg-12 text-center'>";

                echo "<table style=' font-size: 30px;'>";
                echo "<tr>";
                echo "<th style='padding: 20px'><strong>ITEM ID</strong></th>";
                echo "<th><strong>ITEM NAME</strong></th>";
                echo "<th style='padding: 10px;'><strong>QUANTITY</strong></th>";
                echo "<th style='padding: 20px;'><strong>TOTAL PRICE(£)</strong></th>";
                echo "</tr>";
                $onlyOnce = 2;
            }
            echo "<tr>";


            echo $itemId = "<td>".$item->getItemId()."</td>";
            echo $name = "<td>".$item->getName()."</td>";
            echo $orderQuantity = "<td>".$item->getOrderQuantity()."</td>";
            echo $totalPrice = "<td>".$item->getTotalPrice()."</td>";

            echo "</tr>";

        }

        echo "</table>";

        echo "</div>";

    }

}