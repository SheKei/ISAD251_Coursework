<?php
session_start();
include_once '../../src/model/DB_Context.php';

if(isset($_GET['orderId'])) //If cancel button was pressed for an ongoing order
{
    $id = $_GET['orderId'];
    cancelOrder($id);
}

if(isset($_GET['exitOrder']))
{
    $theOrder = $_SESSION['id'];
    cancelOrderReturnHome($theOrder);
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
}

//Same function as above but only for when user wants to leave site and not yet confirmed order
function cancelOrderReturnHome($orderId)
{
    $db = new DB_Context();
    $db->cancelOrderingOrder($orderId);
    header("Location: ../../public/start.php"); //Go back to start page
}