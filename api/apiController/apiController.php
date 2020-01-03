<?php
/**
 * Created by PhpStorm.
 * User: sheke
 * Date: 03/01/2020
 * Time: 19:31
 */
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
include_once '../srcADMIN/modelADMIN/DB_Admin.php';

function outputAPI($tableName)
{

    $db = new DB_Admin();
    $allItems = $db->getAllApi($tableName);

    if($allItems) //If there are results from SELECT * FROM
    {
        $outputCode = 200;
        echo outputJSON($allItems, $outputCode);
    }
    else{

        http_response_code(404);

        echo json_encode(
            array("outputMessage" => "No Items Found!")
        );
    }

}


function outputJSON($theItems, $theOutputCode)
{
    header_remove();
    http_response_code($theOutputCode);
    header('Content-Type: application/json');
    header('Status: '.$theOutputCode);
    return json_encode(array('status' => $theOutputCode, 'message' => $theItems));
}