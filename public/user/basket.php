<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<?php
include_once  'user_nav.php';
include_once '../header.php';
include_once '../../src/model/DB_Context.php';
include_once '../../src/controller/showBasket.php';
?>
<head>

    <style>

    </style>

</head>

<body>

        <h1 class="text-center" style="font-size: 55px;"> Basket </h1>


<div style='padding: 30px; font-size: 30px;' class="container">

    <?php
        $orderStatus = "Ordering";

        $db = new DB_Context();
        $theCurrentItems = $db->viewOrders($_SESSION['tableNum'], $_SESSION['id'], $orderStatus); //Return with an array of items

        if($theCurrentItems)
        {
            showOutput($theCurrentItems);
        }

    ?>


</div>

<div class="container text-center">
    <form style="font-size: 30px; padding: 20px;" action="orderConfirmed.php" method="POST">
        <input type="submit" name="confirmBtn" value="Confirm Order">
    </form>
</div>



</body>
<?php
include_once '../footer.php';

?>