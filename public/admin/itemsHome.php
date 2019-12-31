<!DOCTYPE html>
<html lang="en">
<?php
include_once '../header_admin.php';
include_once 'adminNavBar.php';
?>

<head>

    <style>

        h1
        {
            font-size: 45px;
            font-family: "Century Schoolbook";
        }

    </style>

</head>

<body>

<div class="container">
    <div class="jumbotron">
        <h1 class="text-center">Items</h1>
        <br>
        <button type="button"class="btn btn-default btn-lg btn-block"><a href="itemsAll.php">ALL ITEMS</button>
        <button type="button" class="btn btn-default btn-lg btn-block"><a href="itemsWithdrawn.php">WITHDRAWN ITEMS</button>
        <button type="button" class="btn btn-default btn-lg btn-block"><a href="itemsSale.php">SALE ITEMS</button>
        <button type="button" class="btn btn-default btn-lg btn-block">ADD NEW ITEM</button>
    </div>
</div>





</body>