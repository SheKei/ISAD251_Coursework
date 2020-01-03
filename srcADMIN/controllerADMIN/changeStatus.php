<?php
/**
 * Created by PhpStorm.
 * User: sheke
 * Date: 31/12/2019
 * Time: 22:26
 */

include_once '../../srcADMIN/modelADMIN/DB_Admin.php';

getStatus(); //Change the status of an item

function getStatus()
{
    //If object Id and object status were passed in from previous page of all items
    if(isset($_GET['object']) && isset($_GET['status']) )
    {
        $db = new DB_Admin();

        $itemId = $_GET['object'];

        $oldStatus = $_GET['status'];

        if($oldStatus == "Sale")
        {
            $newStatus = "Withdrawn";
        }
        else{
            $newStatus = "Sale";
        }

        $db->changeItemStatus($itemId, $newStatus); //Change status using item id

        header("Location: ../../public/admin/itemsHome.php"); //Refresh page
        exit();

    }




}