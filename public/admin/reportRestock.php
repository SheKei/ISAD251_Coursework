<!DOCTYPE html>
<html lang="en">
<?php
include_once '../header_admin.php';
include_once 'adminNavBar.php';
include_once '../../srcADMIN/modelADMIN/DB_Admin.php';
?>

<head>

    <style>

        h1{
            font-size: 65px;
            font-family: "Century Schoolbook";
        }

        p{font-size: 25px;}

    </style>

    <h1 class="text-center">RESTOCK REPORT</h1>

</head>



<body>



<?php

$db = new DB_Admin();
$allObjects = $db->viewRestockReport();

if($allObjects)
{
    foreach($allObjects as $object)
    {
        echo "<div class='container'>";
        echo $item = "<p>ITEM ID: ".$object->getId()." - ".$object->getName()."</p>";
        echo $stock = "<p>CURRENT STOCK:".$object->getQuantity()."</p>";
        echo $reorder = "<p>MINIMUM REORDER AMOUNT: ".$object->getReorderAmount()."</p><br>";
        echo "</div>";
    }

}

?>


</body>