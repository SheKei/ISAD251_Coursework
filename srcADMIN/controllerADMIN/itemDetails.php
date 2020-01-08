<?php
/**
 * Created by PhpStorm.
 * User: sheke
 * Date: 31/12/2019
 * Time: 20:47
 */

include_once '../../srcADMIN/modelADMIN/DB_Admin.php';

//Output html elements to only READ details of an item
//Output one button to change the status of an item to withdrawn/sale
//Output one button to READ and EDIT details of an item
function outputDetails($itemId)
{
    $db = new DB_Admin();

    $item = $db->viewItemDetails($itemId);

    if($item) //if item is not null
    {
        $itemName = "<h2>".$item->getName()."</h2>";

        $itemId = "<p>Item ID: ".$item->getId()."</P>";

        $category = "<p>Item Category: ".$item->getCategory()."</P>";

        $itemStatus = "<p>Item Status".$item->getItemStatus()."</P>";

        $imgPath = "../../".$item->getImgPath();
        $imgOutput = $imgPath = "<img src='".$imgPath."' alt='".$item->getName()."' width='300' height='300'>";

        $currentStock = "<p>Current Stocks: ".$item->getQuantity()."</P>";

        $restockAmount = "<p>Minimum Restock Amount: ".$item->getReorderMinAmount()."</P>";

        $buyCost = "<p>Buying Cost: £".$item->getBuyCost()."</P>";

        $sellPrice = "<p>Selling Price: £".$item->getSellCost()."</P>";

        if($item->getVegan() == 1)
        {
            $vegan = "<p>Sutiable for Vegans </p>";
        }
        else
        {
            $vegan = "<p>NOT Sutiable for Vegans</p>";
        }

        if($item->getVegetarian() == 1)
        {
            $veg = "<p>Sutiable for Vegetarians</p>";
        }
        else{
            $veg = "<p>NOT Sutiable for Vegans</p>";
        }

        if($item->getNutFree())
        {
            $nutFree = "<p>Nut-Free</p>";
        }
        else
        {
            $nutFree = "<p>Contains Traces of Nuts</p>";
        }

        if($item->getItemStatus()== "Sale")
        {
            $buttonName = "WITHDRAW ITEM";
        }
        else
        {
            $buttonName = "PUT ITEM ON SALE";
        }

        $container = "<div class='jumbotron text-center'>";
        $endContainer = "</div>";
        $startRow = "<div class='row'>";
        $anotherContainer = "<div class='col-lg-6'>";
        $aContainer = "<div class='col-lg-6 text-left' style='font-size: 20px;'>";

        $editButton = "<button class='w3-button w3-black w3-round-large' type='button'><a href='itemEdit.php?object=".$item->getId()."'>"."EDIT ITEM"."</a></button>";

        $statusButton = "<button  class='w3-button w3-black w3-round-large' type='button'><a href='../../srcADMIN/controllerADMIN/changeStatus.php?object=".$item->getId()."&status=".$item->getItemStatus()."'>".$buttonName."</a></button>";

        $outputForm = "<br><br>".$aContainer.$statusButton.$endContainer;
        $outputEditButton ="<br>".$aContainer.$editButton.$endContainer;

        $output = $container.$startRow.$anotherContainer.$itemName.$imgOutput.$outputForm.$outputEditButton.$endContainer.$aContainer.$itemId.$itemStatus.$category.$vegan.$veg.$nutFree.$sellPrice.$buyCost.$restockAmount.$currentStock.$endContainer.$endContainer.$endContainer;



        echo $output;

    }

}