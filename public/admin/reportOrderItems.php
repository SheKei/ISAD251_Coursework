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

        tr:nth-child(even){background-color: #EFDFBB}

        th {
            background-color: #FF9671;
            color: white;
        }

    </style>

    <h1 class="text-center">ORDER ITEMS</h1>

</head>



<body>



<?php

$db = new DB_Admin();
$allObjects = $db->viewOrderItemsReport();

if($allObjects)
{
    $onlyOnce = 1;
    //echo "<div class='row'>";
    foreach($allObjects as $object)
    {
        if($onlyOnce ==1)
        {
            echo "<div style='padding:40px; ' class='col-lg-12 text-center'>";

            echo "<table style=' font-size: 30px;'>";
            echo "<tr>";
            echo "<th style='padding: 20px;'><strong>ORDER ID</strong></th>";
            echo "<th><strong>TABLE NUMBER</strong></th>";
            echo "<th><strong>ORDER DATE</strong></th>";
            echo "<th><strong>ORDER STATUS</strong></th>";
            echo "<th><strong>ITEM ID</strong></th>";
            echo "<th><strong>ITEM NAME</strong></th>";
            echo "<th style='padding: 10px;'><strong>QUANTITY</strong></th>";
            echo "<th style='padding: 20px;'><strong>TOTAL PRICE(£)</strong></th>";
            echo "</tr>";
            $onlyOnce = 2;
        }

        //echo "<div style='padding: 50px;' class='col-lg-6'>";
        echo "<tr>";
        echo $orderId = "<td>".$object->getOrderId()."</td>";
        echo $tableNumber = "<td>".$object->getTableNumber()."</td>";
        echo $orderDate = "<td>".$object->getOrderDate()."</td>";
        echo $orderStatus = "<td>".$object->getOrderStatus()."</td>";
        echo $itemId = "<td>".$object->getItemId()."</td>";
        echo $name = "<td>".$object->getName()."</td>";
        echo $orderQuantity = "<td>".$object->getOrderQuantity()."</td>";
        echo $totalPrice = "<td>".$object->getTotalPrice()."</td>";
        echo "</tr>";


        //echo "</div>";
    }

    echo "</div>";
}

?>


</body>