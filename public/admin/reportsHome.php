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

    </style>

</head>

<body>

<div class="container">
    <div class="jumbotron">
        <h1 class="text-center">Reports</h1>
        <br>
        <button type="button"class="btn btn-default btn-lg btn-block"><a href="../../api/allStockItems.php">STOCK ITEMS REPORT</button>
        <button type="button" class="btn btn-default btn-lg btn-block"><a href="../../api/allOrders.php">ALL ORDERS REPORT</button>
        <button type="button" class="btn btn-default btn-lg btn-block"><a href="reportOrderItems.php">ORDER ITEMS REPORTS</button>
        <button type="button" class="btn btn-default btn-lg btn-block"><a href="reportRestock.php">RESTOCK REPORTS</button>
    </div>
</div>