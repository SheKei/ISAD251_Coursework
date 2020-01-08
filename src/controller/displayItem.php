<?php

//Function to display all details of an item that is appropiate for customer to see
function displayItem($item)
{
    $container = "<div class='jumbotron text-center'>";
    $endContainer = "</div>";
    $startRow = "<div class='row'>";
    $anotherContainer = "<div class='col-lg-6'>";

    echo $container; //jumbotron
    echo $startRow;  //row
    echo $anotherContainer;//div col-lg-6

    $img = '../../'.$item->getImgPath();

    $imgPath = "<img src='".$img."' alt='".$item->getName()."' width='300' height='300'>";

    echo $imgPath;      //output image of item

    echo $endContainer;  //end div
    echo $anotherContainer;     //div col-lg-6

    $nameHeader = "<h2 style='font-size: 40px;'>".$item->getName()."</h2><br>";

    echo $nameHeader;  //Output name of item

    if($item->getVegan() == 1)       //If item is vegan friendly
    {
        $vegan = " Suitable for Vegans ";
    }
    else
    {
        $vegan = "NOT Suitable for Vegans ";
    }

    $veganPara = "<p>".$vegan."</p><br>";
    echo $veganPara;


    if($item->getVegetarian()==1)   //If item is vegetarian friendly
    {
        $veg = "Suitable for Vegetarians";
    }
    else
    {
        $veg = "NOT Suitable for Vegetarians";
    }

    $vegPara = "<p>".$veg."</p><br>";
    echo $vegPara;

    if($item->getNutFree() == 1)    //If item contains no nuts
    {
        $nut = "Nut-Free";

    }
    else
    {
        $nut = "Contains Traces Of Nuts";
    }

    $nutPara = "<p>".$nut."</p>";
    echo $nutPara;

    $price = "Individual Price: £".$item->getPrice();
    $priceLabel = "<p>".$price."</p><br>";
    echo $priceLabel;

    $favButton = "<button class='w3-button w3-orange w3-round-large' type='button'><a style='color: white' href='viewItem.php?object=".$item->getId()."&fav=1'>FAVOURITE THIS</a></button>";
    echo $favButton;

    echo $endContainer;
    echo $endContainer;
    echo $endContainer;

}