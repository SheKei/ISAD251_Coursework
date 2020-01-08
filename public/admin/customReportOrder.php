<!DOCTYPE html>
<html lang="en">
<?php
include_once '../header_admin.php';
include_once 'adminNavBar.php';
include_once '../../srcADMIN/modelADMIN/DB_Admin.php';
include_once '../../srcADMIN/controllerADMIN/customOrder.php';


?>

<head>

    <style>

        h1
        {
            font-size: 55px;
            font-family: "Century Schoolbook";
        }

        p{
            font-size: 25px;
        }

        tr:nth-child(even){background-color: #EFDFBB}

        th {
            background-color: #FF9671;
            color: white;
        }

    </style>

</head>

<body>

<h1 class="text-center" style="padding: 20px; letter-spacing: 10px;">CUSTOM ORDER REPORT</h1>
<p style="font-size: 30px; padding: 10px" class="text-center">Select an Order Number:</p>

<form class='text-center' style='font-size: 25px; padding: 20px;' action='<?php echo $_SERVER['PHP_SELF']; ?>' method='post'>
<?php

    $db = new DB_Admin();
    $allOrders = $db->getAllOrderIds();
    //Display all order id in a combo box
    if($allOrders)
    {

        echo "<select name='orderId'>";

        foreach($allOrders as $order)
        {
            echo "<option value='".$order."'>ORDER ID: ".$order."</option>";
        }

        echo "</select>";
    }


?>
    <input class="w3-button w3-black w3-round-large" type='submit' name='getBtn' value='SEARCH'>
    </form>


<?php

if(isset($_POST['getBtn'])) //If search button was pressed
{
    $theId = $_POST['orderId'];
    getOrderItems($theId); //Display order items that have the chosen order id

}
?>





</body>