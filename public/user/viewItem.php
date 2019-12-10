<!DOCTYPE html>
<html lang="en">
<?php
include_once '../header.php';
include_once '../../src/model/menuItem.php';
include_once '../../src/model/DB_Context.php';

if(isset($_GET['object']))
{
    displayObject($_GET['object']);
}




?>

<head>

    <div class="container">

        <?php

        function displayObject($id)
        {
            $db = new DB_Context();

            $object = $db->viewTheItem($id);

            if($object)
            {
                displayItem($object);
            }

        }

        function displayItem($item)
        {
            $nameHeader = "<h2>".$item->getName()."</h2>";

            echo $nameHeader;

            if($item->getVegan() == 1)
            {
                $vegan = " Suitable for Vegans ";
                $veganPara = "<p>".$vegan."</p>";
                echo $veganPara;
            }
            if($item->getVegetarian()==1)
            {
                $veg = " Suitable for Vegetarians ";
                $vegPara = "<p>".$veg."</p>";
                echo $vegPara;
            }

            if($item->getNutFree() == 1)
            {
                $nut = " Nut-Free ";
                $nutPara = "<p>".$nut."</p>";
                echo $nutPara;
            }

            $price = "£".$item->getPrice();
            $priceLabel = "<p>".$price."</p>";
            echo $priceLabel;
        }



        ?>


    </div>


</head>

<body>





</body>
<?php
include_once '../footer.php';

?>