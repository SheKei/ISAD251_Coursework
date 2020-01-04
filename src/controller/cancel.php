<?php

include_once '../../src/model/DB_Context.php';

function cancelItem($itemId, $tableNumber, $orderId)
{
    $db = new DB_Context();
    $db->cancelOrderItem($tableNumber, $orderId, $itemId);

}