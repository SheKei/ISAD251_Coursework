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
            font-size: 55px;
            font-family: "Century Schoolbook";
        }

        #button
        {
            font-size: 25px;
        }

    </style>

</head>

<body>

<div class="container">
    <div class="jumbotron">
        <h1 class="text-center" style="padding: 20px; letter-spacing: 5px;">Items</h1>
        <br>
        <button id="button" type="button"class="btn btn-default btn-lg btn-block"><a href="itemsAll.php">ALL ITEMS</button>
        <button id="button" type="button" class="btn btn-default btn-lg btn-block"><a href="itemsWithdrawn.php">WITHDRAWN ITEMS</button>
        <button id="button" type="button" class="btn btn-default btn-lg btn-block"><a href="itemsSale.php">SALE ITEMS</button>
        <button id="button" type="button" class="btn btn-default btn-lg btn-block"><a href="itemAdd.php">ADD NEW ITEM</button>
    </div>
</div>





</body>