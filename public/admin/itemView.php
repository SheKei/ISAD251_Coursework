<!DOCTYPE html>
<html lang="en">
<?php
include_once '../header_admin.php';
include_once 'adminNavBar.php';
include_once '../../srcADMIN/controllerADMIN/itemDetails.php';

if(isset($_GET['status']))
    echo $_GET['status'];
?>

<head>

    <style>

        h2
        {
            font-size: 45px;
            font-family: "Century Schoolbook";
        }

        p{font-size: 25px}


    </style>

</head>


<body>

<?php

if(isset($_GET['object']))                  //If id of item was successfully passed from _item page
{
    outputDetails($_GET['object']);
}

?>

</body>