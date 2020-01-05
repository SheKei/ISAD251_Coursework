<!DOCTYPE html>
<html lang="en">
<?php
include_once '../header_admin.php';
include_once 'adminNavBar.php';
include_once '../../srcADMIN/modelADMIN/DB_Admin.php';
?>

<head>

    <style>

        h1{
            font-size: 65px;
            font-family: "Century Schoolbook";
        }

        p{font-size: 25px;}

    </style>

    <h1 class="text-center">ORDER ITEMS</h1>

</head>



<body>



<?php

$db = new DB_Admin();
$allObjects = $db->viewOrderItemsReport();

if($allObjects)
{
    echo "<div class='row'>";
    foreach($allObjects as $object)
    {
        echo "<div style='padding: 50px;' class='col-lg-6'>";
        echo $orderId = "<p><strong>ORDER ID: ".$object->getOrderId()."</strong></p>";
        echo $tableNumber = "<p><strong>TABLE NUMBER: ".$object->getTableNumber()."</strong></p>";
        echo $orderDate = "<p><strong>ORDER DATE: ".$object->getOrderDate()."</strong></p>";
        echo $orderStatus = "<p><strong>ORDER STATUS: ".$object->getOrderStatus()."</strong></p>";
        echo $itemId = "<p><strong>ITEM ID: ".$object->getItemId()."</strong></p>";
        echo $name = "<p><strong>ITEM NAME:".$object->getName()."</strong></p>";
        echo $orderQuantity = "<p><strong>ORDER QUANTITY: ".$object->getOrderQuantity()."</strong></p>";
        echo $totalPrice = "<p><strong>TOTAL ITEM PRICE: ".$object->getTotalPrice()."</strong></p><br><br>";

        echo "</div>";
    }

    echo "</div>";
}

?>


</body>