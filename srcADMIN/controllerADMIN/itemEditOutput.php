<?php
/**
 * Created by PhpStorm.
 * User: sheke
 * Date: 01/01/2020
 * Time: 19:08
 */

include_once '../../srcADMIN/modelADMIN/DB_Admin.php';

//Display html elements for user to view and edit fields
function displayFieldsToEdit($itemId)
{
    $db = new DB_Admin();

    $item = $db->viewItemDetails($itemId);

    if($item)
    {
        $startForm="<form action='../../srcADMIN/controllerADMIN/itemEdit.php' method='post'>";
        $endForm ="</form>";

        $startContainer = "<div class='text-center'>";
        $endContainer = "</div>";

        $idItem = "Item ID: <input type='text' name='id' value='".$item->getId()."' readonly><br><br>";
        $itemStatus = "Item Status: <input type='text' name='status' value='".$item->getItemStatus()."' readonly><br><br>";

        $imgPath = "../../".$item->getImgPath();
        $imgOutput = $imgPath = "<img src='".$imgPath."' alt='".$item->getName()."' width='300' height='300'><br><br>";

        $itemName = "Item Name: <input type='text' name='name' value='".$item->getName()."' required><br><br>";
        $buy = "Buying Cost: £<input type='text' id='buyPrice' name='buy' value='".$item->getBuyCost()."' onchange='checkInput()' required><br><br>";
        $sell ="Selling Price: £<input type='text' id='sellPrice' name='sell' value='".$item->getSellCost()."' onchange='checkInput()' required><br><br>";
        $stock = "Current Stock: <input type='number' name='stock' value='".$item->getQuantity()."' required><br><br>";
        $minRestock = "Minimum Restock Quantity: <input type='number' name='restock' value='".$item->getReorderMinAmount()."'required> <br><br>";

        if($item->getVegan() == 1)
        {
            $checkVegan ="<input type='checkbox' name='vegan' value='1' checked> Vegan<br>";
        }
        else{
            $checkVegan ="<input type='checkbox' name='vegan' value='1'> Vegan<br>";
        }

        if($item->getVegetarian() == 1)
        {
            $checkVeg = "<input type='checkbox' name='veg' value='1' checked> Vegetarian<br>";
        }
        else{
            $checkVeg = "<input type='checkbox' name='veg' value='1'> Vegetarian<br>";
        }

        if($item->getNutFree() == 1)
        {
            $checkNutFree = "<input type='checkbox' name='nutFree' value='1' checked> Nut-Free<br><br>";
        }
        else{
            $checkNutFree = "<input type='checkbox' name='nutFree' value='1'> Nut-Free<br><br>";
        }

        if($item->getCategory() == "Drink")
        {
            $firstOption = "Drink";
            $secondOption = "Cake";
        }
        else
        {
            $firstOption = "Cake";
            $secondOption = "Drink";
        }

        $selectCategory = "Category: <select name='category'>";
        $firstSelect = "<option value='".$firstOption."'>".$firstOption."</option>";
        $secondSelect = "<option value='".$secondOption."'>".$secondOption."</option>";
        $endSelect = "</select><br><br>";

        $outputSelect = $selectCategory.$firstSelect.$secondSelect.$endSelect;

        $submitBtn = "<input type='submit' name='saveEdit' value='Save Changes'>";

        echo $startContainer;
        echo $startForm;

        echo $idItem;
        echo $itemStatus;
        echo $imgOutput;

        echo $itemName;
        echo $outputSelect;
        echo $buy;
        echo $sell;

        echo $stock;
        echo $minRestock;

        echo $checkVegan;
        echo $checkVeg;
        echo $checkNutFree;

        echo $submitBtn;

        echo $endForm;
        echo $endContainer;

    }

}