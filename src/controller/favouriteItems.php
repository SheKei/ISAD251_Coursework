<?php

function displayFavouriteItems($items)
{
    if($items)
    {
        echo $startRow = "<div class='row'>";

        foreach($items as $item)
        {
            $img = '../../'.$item->getImgPath();
            $imgPath = "<img src='".$img."' alt='".$item->getName()."' width='150' height='150'>";
            $itemName = "<h2><a href='viewItem.php?object=".$item->getId()."'>".$item->getName()."</a></h2>";
            $numOfFavourites = "<p> Number of Favourites: ".$item->getNumOfLikes()."</p>";

            $container = "<div style='padding:20px;font-size:25px;color:black;' class='col-sm-4 text-center'>".$itemName.$imgPath.$numOfFavourites."</div>";
            echo $container;
        }

        echo $endRow = "</div>";
    }


}