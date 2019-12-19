<!DOCTYPE html>
<html lang="en">
<?php
include_once 'user_nav.php';
include_once '../header.php';
include_once '../../src/model/menuItem.php';
include_once '../../src/model/DB_Context.php';


if(isset($_GET['object']))                  //If id of item was successfully passed from menu page
{
    displayObject($_GET['object']);
}

?>

<head>

<style>
    h2
    {
        font-size: 30px;

    }

    p
    {
        font-size: 20px;
    }

</style>


</head>

<body>

<div class="container">

    <?php

    function displayObject($id)
    {
        $db = new DB_Context();

        $object = $db->viewTheItem($id); //Return with item user wishes to view

        if($object)                      //If object has been returned as not null
        {
            displayItem($object);
        }

    }

    function displayItem($item)
    {
        $nameHeader = "<h2>".$item->getName()."</h2>";

        echo $nameHeader;  //Output name of item

        $img = '../../'.$item->getImgPath();

        $imgPath = "<img src='".$img."' alt='".$item->getName()."' width='150' height='150'>";

        echo $imgPath;      //output image of item

        if($item->getVegan() == 1)       //If item is vegan friendly
        {
            $vegan = " Suitable for Vegans ";
            $veganPara = "<p>".$vegan."</p>";
            echo $veganPara;
        }
        if($item->getVegetarian()==1)   //If item is vegetarian friendly
        {
            $veg = " Suitable for Vegetarians ";
            $vegPara = "<p>".$veg."</p>";
            echo $vegPara;
        }

        if($item->getNutFree() == 1)    //If item contains no nuts
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

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Quantity <input type="number" name="quantity" min="1">
        <br>
        <input type="submit" name="submitBtn" value="Order">
    </form>


</div>



</body>
<?php
include_once '../footer.php';

?>