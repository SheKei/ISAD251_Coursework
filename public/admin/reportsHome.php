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
        <h1 class="text-center" style="padding: 20px; letter-spacing: 5px;">Reports</h1>
        <br>
        <button id="button" type="button"class="btn btn-default btn-lg btn-block"><a href="../../api/allStockItems.php">STOCK ITEMS REPORT</button>
        <button id="button" type="button" class="btn btn-default btn-lg btn-block"><a href="../../api/allOrders.php">ALL ORDERS REPORT</button>
        <button id="button" type="button" class="btn btn-default btn-lg btn-block"><a href="reportOrderItems.php">ALL ORDER ITEMS REPORTS</button>
        <button id="button" type="button" class="btn btn-default btn-lg btn-block"><a href="customReportOrder.php">CUSTOM ORDER ITEMS REPORTS</button>
        <button id="button" type="button" class="btn btn-default btn-lg btn-block"><a href="reportRestock.php">RESTOCK REPORTS</button>
    </div>
</div>