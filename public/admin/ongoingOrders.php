<!DOCTYPE html>
<html lang="en">
<?php
include_once '../header_admin.php';
include_once 'adminNavBar.php';
include_once '../../srcADMIN/controllerADMIN/orderOutput.php';
?>

<head>

    <style>

        h1{
            font-size: 65px;
            font-family: "Century Schoolbook";
        }

        p{font-size: 30px;}

    </style>

    <h1 class="text-center" style="padding: 30px; letter-spacing: 10px;">ONGOING ORDERS</h1>

</head>

<body>

<?php

    displayOngoingOrders();
?>




</body>