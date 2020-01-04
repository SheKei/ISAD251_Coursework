<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<?php
include_once 'user_nav.php';
include_once '../header.php';
include_once '../../src/model/menuItem.php';
include_once '../../src/model/DB_Context.php';
include_once '../../src/controller/displayItem.php';
include_once '../../src/controller/favouriteItems.php';


if(isset($_GET['object']))                  //If id of item was successfully passed from menu page
{
    $_SESSION['tempItem'] = $_GET['object'];//Save item id as global var
    displayObject($_SESSION['tempItem']);
}
else{                                       //If order button was pressed and page refreshed
    displayObject($_SESSION['tempItem']);   //Display saved item
}

if(isset($_POST['orderBtn']))               //If order button was pressed, insert order item
{
    $db = new DB_Context();
    $db->insertNewOrderItem($_SESSION['tableNum'],$_SESSION['tempItem'], $_POST['quantity'],$_SESSION['id'] );

}

if(isset($_GET['fav']) && isset($_GET['object'])) //If favourite button was pressed
{
    $table = $_SESSION['tableNum'];
    $itemId = $_GET['object'];
    addFavourtite($table, $itemId);
    header("Location: viewItem.php?object=$itemId"); //Refresh page
    exit();
}



?>

<head>

<style>
    h2
    {
        font-size: 30px;

    }

    p
    {
        font-size: 20px;
    }

</style>


</head>

<body>

<div class="container">

    <?php

    function displayObject($id)
    {
        $db = new DB_Context();

        $object = $db->viewTheItem($id); //Pass item id and Return with item user wishes to view

        if($object)                      //If object has been returned as not null
        {
            displayItem($object);
        }

    }

    ?>

    <form class='text-center' style='font-size: 25px; padding: 20px;' action='<?php echo $_SERVER['PHP_SELF']; ?>' method='post'>
        Quantity <input type='number' name='quantity' min='1'>
        <br><br>
        <input type='submit' name='orderBtn' value='Order'>
    </form>


</div>



</body>
<?php
include_once '../footer.php';

?>