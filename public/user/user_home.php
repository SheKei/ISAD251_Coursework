<?php
include_once  'user_nav.php';
include_once '../header.php';
include_once  '../../src/model/DB_Context.php';
include_once  '../../src/model/order.php';



if(isset ($_POST['tableNumber']))
{
    $db = new DB_Context();

    //return the order id generated for this order
    $orderId = $db->insertNewOrder($_POST['tableNumber']);  //Create new order for selected table number

    $order = new order($_POST['tableNumber'], $orderId);    //Save to object

    $output = $order;
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
            <h2>Welcome! Your Table Number is <?php echo $output->getTableNum() ?> </h2>
        </div>
    </div>



    </body>


    </html>

<?php
include_once '../footer.php';

?>