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

        p{font-size: 25px;}

    </style>

    <h1 class="text-center">ONGOING ORDER ITEMS</h1>

</head>

<?php

    if(isset($_GET['order']))
    {

        $id = $_GET['order'];
        displayOrderItems($id);
    }

?>

<body>






</body>
