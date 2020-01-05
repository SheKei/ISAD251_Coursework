<?php
/**
 * Created by PhpStorm.
 * User: sheke
 * Date: 03/01/2020
 * Time: 19:52
 */
include_once '../../srcADMIN/modelADMIN/DB_Admin.php';
include_once '../../srcADMIN/modelADMIN/ongoingOrderItem.php';

//If deliver order button was pressed and order id was caught
if(isset($_GET['orderId']))
{
    deliverOrder($_GET['orderId']);
}


//Function to display order id, table number and order date
//Order id becomes a link to press to view details of order items
function displayOngoingOrders()
{
    $db = new DB_Admin();

    $ongoingOrders = $db->getAllOngoingOrders();

    echo $startRow = "<div class='row'>";

    if($ongoingOrders) //if there are results being returned
    {
        foreach($ongoingOrders as $anOrder)
        {
            $orderId = "<p>"."<a href='ongoingOrderItems.php?order=".$anOrder->getOrderNum()."'>ORDER ID: ".$anOrder->getOrderNum()."</a></p>";

            $tableNum = "<p>TABLE NUMBER: ".$anOrder->getTableNum()."</p>";

            $orderDate = "<p>ORDER DATE: ".$anOrder->getOrderDate()."</p>";

            $container = "<div class='col-sm-6 text-center'>".$orderId.$tableNum.$orderDate."</div>";

            echo $container;

        }

    }

    echo $endRow = "</div>";

}

//Display the ordered items of an ongoing order
function displayOrderItems($orderId)
{
    $db = new DB_Admin();
    $items = $db->viewOrderItems($orderId);

    if($items) {

        echo "<h2 class='text-center'>ORDER NUMBER: ".$orderId."</h2>";
        echo "<br>";

        echo $startRow = "<div class='row'>";

        foreach ($items as $item){

            $itemId = "<p>ITEM ID:".$item->getId()."</p>";
            $name = "<p>ITEM NAME:".$item->getName()."</p>";
            $quantity = "<p>ITEM QUANTITY:".$item->getQuantity()."</p>";

            $container = "<div class='col-sm-12 text-center'>".$itemId.$name.$quantity."</div><br>";

            echo $container;
        }

        $confirmBtn = "<div class='col-sm-12 text-center'><button type='button'><a href='../../srcADMIN/controllerADMIN/orderOutput.php?orderId=".$orderId."'>DELIVER ORDER</a></button></div>";

        echo $endRow = "</div>";

        //Button to change status of an order to 'delivered'
        echo $confirmBtn;

    }

}

//Change order status to from ongoing to delivered
function deliverOrder($orderId)
{
    $db = new DB_Admin();

    if($orderId)
    {
        $db->deliverOrder($orderId);
    }

    header("Location: ../../public/admin/ongoingOrders.php"); //Go back to orders page
    exit();

}