<!DOCTYPE html>
<html lang="en">
<?php
include_once '../header_admin.php';
include_once 'adminNavBar.php';
include_once '../../srcADMIN/modelADMIN/DB_Admin.php';
include_once '../../srcADMIN/modelADMIN/previewItems.php';
include_once '../../srcADMIN/controllerADMIN/itemsOutput.php';

?>

<head>


    <style>

    h1{
        font-size: 65px;
    }

    h1,h3
    {font-family: "Century Schoolbook";}


    p{font-size: 20px}


    </style>

</head>

<body>

    <h1 style="letter-spacing: 10px; padding: 20px;" class="text-center">ALL ITEMS</h1>

    <?php

    $firstStatus="Sale";
    $secondStatus="Withdrawn";

    displayItems($firstStatus, $secondStatus); //Get both sale and withdrawn items

    ?>

</body>