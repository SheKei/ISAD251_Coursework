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
        $breakLine="";
        $db = new DB_Context();
        $theCurrentItems = $db->viewCurrentItems($_SESSION['tableNum'], $_SESSION['id']);

        showOutput($theCurrentItems, $db);



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