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

        //If both buying and selling prices are in number format
        if(is_numeric($theSell) == true && is_numeric($theBuy) == true)
        {
            //If prices are positive and not equal to each other
            if($theSell > 0 && $theBuy > 0 && $theBuy != $theSell)
            {
                //If the selling price is bigger than the buing price
                if($theSell > $theBuy)
                {
                    $db = new DB_Admin();
                    $db->saveChangedItem($theId, $theName, $theBuy, $theSell, $theCategory, $theStock, $theRestock, $vegan, $veg, $nutFree);
                    header("Location: ../../public/admin/itemsHome.php"); //Go back to items home page
                }
                else{
                    header("Location: ../../public/admin/itemEdit.php?object=$theId&invalid=1"); //Go back to edit item page
                }
            }
            else
            {
                header("Location: ../../public/admin/itemEdit.php?object=$theId&invalid=1"); //Go back to edit item page
            }

        }
        else{
            header("Location: ../../public/admin/itemEdit.php?object=$theId&invalid=1"); //Go back to edit item page
        }




    }

}