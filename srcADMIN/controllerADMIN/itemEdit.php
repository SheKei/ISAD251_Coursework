<?php
/**
 * Created by PhpStorm.
 * User: sheke
 * Date: 01/01/2020
 * Time: 19:53
 */
include_once '../../srcADMIN/modelADMIN/DB_Admin.php';

saveChanges();

function saveChanges()
{
    if(isset($_POST['saveEdit'])) //If save changes button was pressed and all inputs were valid
    {
        $theId = $_POST['id'];

        $theName = $_POST['name'];

        $theBuy = $_POST['buy'];
        $theSell = $_POST['sell'];

        $theStock = $_POST['stock'];
        $theRestock = $_POST['restock'];

        $theCategory = $_POST['category'];

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

        $db->saveChangedItem($theId, $theName, $theBuy, $theSell, $theCategory, $theStock, $theRestock, $vegan, $veg, $nutFree);

        header("Location: ../../public/admin/itemsHome.php"); //Go back to items home page
        exit();

    }

}