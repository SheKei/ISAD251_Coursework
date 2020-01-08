
<?php
include_once  '../../src/model/DB_Context.php';
include_once  'user_nav.php';
include_once '../header.php';
include_once '../../src/controller/showBasket.php';

if(isset ($_POST['tableNumber']))
{
    $db = new DB_Context();

    //return the order id generated for this order
    $orderId = $db->insertNewOrder($_POST['tableNumber']);  //Create new order for selected table number

    $_SESSION['tableNum'] = $_POST['tableNumber']; //Save as global var
    $_SESSION['id'] = $orderId;

    //header("user_home.php"); //Refresh page so nav bar has global var order id
    header("user_home.php");

}



?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <style>

            body{
                background-color: white;
            }

            h1, h2, h3{
                font-family: "Century Schoolbook", "SansSerif";
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

            //VIEW ONLY THE MOST RECENT ORDER OF ONGOING AND DELIVERED
            $db = new DB_Context();

            $status1 = "Confirmed - Ongoing";
            $confirmedItems = $db->viewOrders($_SESSION['tableNum'], $_SESSION['id'], $status1);
            if($confirmedItems)
            {
                showConfirmedItems($confirmedItems, $status1);
            }

            $status2 = "Delivered";
            $deliveredItems = $db->viewOrders($_SESSION['tableNum'], $_SESSION['id'], $status2);
            if($deliveredItems)
            {
                showConfirmedItems($deliveredItems, $status2);
            }

            if(empty($confirmedItems) && empty($deliveredItems))
            {
                echo "<h3 class='text-center' style='padding:20px;'>You have yet to confirm your order, head over to basket once you are finished ordering!</h3>";
            }

        ?>

    </div>



    </body>


    </html>

<?php
include_once '../footer.php';

?>