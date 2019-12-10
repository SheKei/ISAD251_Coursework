<?php
include_once '../../src/model/DB_Context.php';


function filter()
{
    if($_POST['category'] == 'Cake') //If Cake radio box selected
    {
        $category1 = $_POST['category'];
        $category2 = $_POST['category'];
    }
    else if($_POST['category'] == 'Drink') //If Drink radio box selected
    {
        $category1 = $_POST['category'];
        $category2 = $_POST['category'];
    }
    else //If both drinks and cakes selected
    {
        $category1 = 'Cake';
        $category2 = 'Drink';
    }


    if(empty($_POST['nutFree'])) //If checkbox not clicked on
    {
        $nutFree = 0;
    }
    else
    {
        $nutFree = 1; //Want to see nut free items
    }

    if(empty($_POST['veg']))
    {
        $veg = 0;
    }
    else
    {
        $veg = 1;//Want to see vegetarian friendly items
    }

    if(empty($_POST['vegan']))
    {
        $vegan = 0;
    }
    else
    {
        $vegan =1; //Want to see vegan friendly items
    }

    //Put parameters into procedure
    //$sql = "CALL isad251_stong.Tearoom_Menu(".$nutFree.",".$veg.",".$vegan.",'".$category1."','".$category2."')";

    $db = new DB_Context();
    $items = $db->showMenu($nutFree,$veg,$vegan,$category1,$category2);//To DB_Context
    return $items; //Go back to menu.php

}