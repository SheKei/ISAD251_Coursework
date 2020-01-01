<!DOCTYPE html>
<html lang="en">
<?php
include_once '../header_admin.php';
include_once 'adminNavBar.php';
include_once '../../srcADMIN/controllerADMIN/itemEditOutput.php';
?>

<head>



    <style>

        .text-center
        {
            font-size: 25px;
            font-family: "Century Schoolbook";
        }

    </style>

</head>

<body>

<?php

if(isset($_GET['object']))
{
    $id = $_GET['object'];

    displayFieldsToEdit($id);
}
?>





</body>