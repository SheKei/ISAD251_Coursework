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

    <h1 class="text-center" style="padding: 20px; letter-spacing: 10px;">RESTOCK REPORT</h1>

</head>



<body>



<?php

$db = new DB_Admin();
$allObjects = $db->viewRestockReport();

if($allObjects)
{
    foreach($allObjects as $object)
    {
        echo "<div class='container' style='padding: 10px;'>";
        echo $item = "<p><strong>ITEM ID: </strong> ".$object->getId()." - ".$object->getName()."</p>";
        echo $stock = "<p><strong>CURRENT STOCK: </strong>".$object->getQuantity()."</p>";
        echo $reorder = "<p><strong>MINIMUM REORDER: </strong> ".$object->getReorderAmount()."</p><br>";
        echo "</div>";
    }

}

?>


</body>