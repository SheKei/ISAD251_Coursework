<!DOCTYPE html>
<html lang="en">
<?php
include_once '../header_admin.php';
include_once 'adminNavBar.php';
include_once '../../srcADMIN/modelADMIN/DB_Admin.php';
include_once '../../srcADMIN/modelADMIN/previewItems.php';

?>

<head>


    <style>

    h1{
        font-size: 65px;
    }

    h1,h3
    {font-family: "Century Schoolbook";}

    .row
    {
        margin: 20px;
    }

    p{font-size: 20px}


    </style>

</head>

<body>

    <h1 class="text-center">ALL ITEMS</h1>

    <?php

    displayItems();

    function displayItems()
    {
        $db = new DB_Admin();

        $items = $db->getAllItems();

        if($items)
        {
            $startRow = "<div class='row'>";
            echo $startRow;

            foreach($items as $anItem)
            {
                $id = $anItem->getId();
                $name = $anItem->getName();

                $link = "<p>"."<a href='itemEdit.php?object=".$id."'>"."<h3><strong> Item ID: ".$id." - ".$name."</strong></h3>"."</a></p>";

                $category = "Item Category: ".$anItem->getCategory();
                $status = "Item Status: ".$anItem->getItemStatus();


                $img = '../../'.$anItem->getImgPath();
                $imgPath = "<img src='".$img."' alt='".$anItem->getName()."' width='150' height='150'>";

                $categoryPara = "<p>".$category."</p>";
                $statusPara = "<p>".$status."</p>";

                $container = "<div class='col-sm-4 text-center'>".$link.$imgPath.$categoryPara.$statusPara."</div>";

                echo $container;
            }

            echo $endRow = "</div>";

        }

    }

    ?>

</body>