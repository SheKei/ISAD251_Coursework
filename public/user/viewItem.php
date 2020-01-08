

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

    if($_POST['quantity'] > 0) //If bigger than 0
    {
        $possibleNewId = $db->checkOrder($_SESSION['tableNum'],$_SESSION['id'] ,$_SESSION['tempItem'], $_POST['quantity']);

        if($possibleNewId != 0) //If a new order had to be made because current had already been confirmed
        {
            $_SESSION['id'] = $possibleNewId; //Update global variable

        }
    }

}

if(isset($_GET['fav']) && isset($_GET['object'])) //If favourite button was pressed
{
    $table = $_SESSION['tableNum'];
    $itemId = $_GET['object'];
    addFavourtite($table, $itemId);
    header("Location: viewItem.php?object=$itemId"); //Refresh page

}



?>

<head>

<style>
    h2
    {
        font-size: 35px;

    }

    h1, h2, h3{
        font-family: "Century Schoolbook", "SansSerif";
    }

    p
    {
        font-size: 25px;
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
        <input  class="w3-button w3-black w3-round-large" type='submit' name='orderBtn' value='ORDER'>
    </form>


</div>



</body>
<?php
include_once '../footer.php';

?>