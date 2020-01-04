<?php

include_once '../../src/model/DB_Context.php';

if(isset($_GET['orderId']))
{
    $id = $_GET['orderId'];
    cancelOrder($id);
}

function cancelItem($itemId, $tableNumber, $orderId)
{
    $db = new DB_Context();
    $db->cancelOrderItem($tableNumber, $orderId, $itemId);

}

//Cancel an order that has not been delivered yet
function cancelOrder($orderId)
{
    $db = new DB_Context();
    $db->cancelOngoingOrder($orderId);

    header("Location: ../../public/user/user_home.php"); //Refresh page
    exit();
}