<?php
/**
 * Created by PhpStorm.
 * User: sheke
 * Date: 31/12/2019
 * Time: 20:02
 */
include_once '../modelADMIN/DB_Admin.php';

createItem();

function createItem()
{
    if(ISSET($_POST['addItemButton']))
    {
        $itemName = $_POST['itemName'];
        $buy = $_POST['buy'];
        $sell = $_POST['sell'];
        $quantity = $_POST['quantity'];
        $restock = $_POST['restock'];
        $category = $_POST['category'];
        $itemStatus = $_POST['itemStatus'];
        $img = "assets/img/".$_POST['imgName'].".jpg";


        if(ISSET($_POST['veg'])) {
            $veg = $_POST['veg'];
        }
        else
        {
            $veg = 0;
        }

        if(ISSET($_POST['vegan'])) {
            $vegan = $_POST['vegan'];
        }
        else
        {
            $vegan = 0;
        }

        if(ISSET($_POST['nutFree'])) {
            $nutFree = $_POST['nutFree'];
        }
        else
        {
            $nutFree = 0;
        }

        $db = new DB_Admin();
        $db->addItem($itemName, $buy, $sell, $category, $quantity, $restock, $veg, $vegan, $nutFree, $img, $itemStatus);

        header("Location: ../../public/admin/itemsHome.php"); //Go back to items home page
        exit();

    }

}