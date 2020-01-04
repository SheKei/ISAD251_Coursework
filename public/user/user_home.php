<?php
session_start();
?>

<?php
include_once  'user_nav.php';
include_once '../header.php';
include_once  '../../src/model/DB_Context.php';
include_once  '../../src/model/order.php';
include_once '../../src/controller/showBasket.php';

if(isset ($_POST['tableNumber']))
{
    $db = new DB_Context();

    //return the order id generated for this order
    $orderId = $db->insertNewOrder($_POST['tableNumber']);  //Create new order for selected table number

    $order = new order($_POST['tableNumber'], $orderId);    //Save to object

    $_SESSION['tableNum'] = $order->getTableNum();
    $_SESSION['id'] = $order->getOrderId();
}
else
{
    $tableNum = "NOT SELECTED. GO BACK AND CHOOSE TABLE NUMBER";
    $orderNum = 0;
    $noOrder = new order($tableNum, $orderNum);

    $output = $noOrder;
}

?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <style>

            body{
                background-color: white;
            }

        </style>
    </head>

    <body>

    <div class="container">
        <div class="col-lg-12 text-center">
            <h2 style="font-size: 45px; padding: 20px;">Welcome! Your Table Number is <?php echo $_SESSION['tableNum'] ?> </h2>
        </div>
    </div>

    <div class="container">

        <?php

            $db = new DB_Context();

            $status1 = "Confirmed - Ongoing";
            $confirmedItems = $db->viewOrders($_SESSION['tableNum'], $_SESSION['id'], $status1);
            if($confirmedItems)
            {
                showConfirmedItems($confirmedItems);
            }

            $status2 = "Delivered";
            $deliveredItems = $db->viewOrders($_SESSION['tableNum'], $_SESSION['id'], $status2);
            if($deliveredItems)
            {
                showConfirmedItems($deliveredItems);
            }


        ?>

    </div>



    </body>


    </html>

<?php
include_once '../footer.php';

?>