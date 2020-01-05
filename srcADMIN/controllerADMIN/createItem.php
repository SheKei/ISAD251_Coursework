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
    if(ISSET($_POST['addItemButton'])) //If submit button was pressed from add item page
    {
        //Gather all input first
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

        //If sell input and buy inputs are valid numbers
        if(is_numeric($sell) == true && is_numeric($buy) == true)
        {
            //If both selling price and buying price are positive and not equal to each other
            if($sell > 0 && $buy > 0 && $sell != $buy)
            {
                //If the selling price is more than buying price
                if($sell > $buy)
                {
                    $db = new DB_Admin();
                    $db->addItem($itemName, $buy, $sell, $category, $quantity, $restock, $veg, $vegan, $nutFree, $img, $itemStatus);
                    header("Location: ../../public/admin/itemsHome.php"); //Go back to items home page

                }
                else
                {
                    header("Location: ../../public/admin/itemAdd.php?invalid=1"); //Go back to items add page

                }
            }
            else{
                header("Location: ../../public/admin/itemAdd.php?invalid=1"); //Go back to items add page
            }

        }
        else
        {
            header("Location: ../../public/admin/itemAdd.php?invalid=1"); //Go back to items add page

        }


    }

}