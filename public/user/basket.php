<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<?php
include_once  'user_nav.php';
include_once '../header.php';
include_once '../../src/model/DB_Context.php';
?>
<head>

    <style>

        #output
        {
            font-size: 20px;
        }
    </style>

</head>

<body>

<div class="container">
    <div class="col-lg-12 text-center">
        <h1> Basket </h1>
    </div>
</div>

<div class="container" id="output">

    <?php
        $db = new DB_Context();

        $currentItems = $db->viewCurrentItems($_SESSION['tableNum'], $_SESSION['id']);

        if($currentItems)
        {
            foreach($currentItems as $currentItem)
            {
                $itemName = $currentItem->getName();
                $price = " Individual Price: £".$currentItem->getSinglePrice();
                $amount = "Quantity: ".$currentItem->getAmount();
                $totalItemPrice = "Total Price: £".$currentItem->getTotalItemPrice();

                $displayString = "<p>".$itemName."  ".$price."  ".$amount."  ".$totalItemPrice."</p>";
                $breakLine = "<br>";

                echo $displayString;
                echo $breakLine;
            }
        }

        echo $breakLine;
        $orderCost = "TOTAL ORDER PRICE: £".$db->calculateTotalOrderPrice($_SESSION['tableNum'], $_SESSION['id']);
        $displayPrice = "<p>".$orderCost."</p>";

        echo $displayPrice;
        echo $breakLine;



    ?>


</div>

<div class="container">
    <form action="orderConfirmed.php" method="POST">
        <input type="submit" name="confirmBtn" value="Confirm Order">
    </form>
</div>



</body>
<?php
include_once '../footer.php';

?>