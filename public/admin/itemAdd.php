<!DOCTYPE html>
<html lang="en">
<?php
include_once '../header_admin.php';
include_once 'adminNavBar.php';
?>

<head>



    <style>

        h1
        {
            font-size: 65px;
            font-family: "Century Schoolbook";
        }

        form
        {font-size: 25px}

    </style>

</head>

<body>

<h1 class="text-center">Add an Item</h1>
<br>

<div class="text-center">

    <form action = "../../srcADMIN/controllerADMIN/createItem.php" method="post">

        Item Name:
        <input type="text" name="itemName" required><br><br>

        Buying Cost:
        <input type="number" name="buy" required><br><br>

        Selling Price:
        <input type="number" name="sell" required><br><br>

        Current Stock Quantity:
        <input type="number" name="quantity" ><br><br>

        Minimum Restock Quantity:
        <input type="number" name="restock" ><br><br>

        <input type="checkbox" name="veg" value="1"> Vegetarian<br>
        <input type="checkbox" name="vegan" value="1"> Vegan<br>
        <input type="checkbox" name="nutFree" value="1"> Nut-Free<br><br>

        Category:
        <select name="category">
            <option value="Cake">Cake</option>
            <option value="Drink">Drink</option>

        </select><br><br>

        Item Status:
        <select name="itemStatus">
            <option value="Sale">Sale</option>
            <option value="Withdrawn">Withdrawn</option>
        </select><br><br>

        Image: assets/img/
        <input type="text" name="imgName" required>.jpg<br><br>

        <input type="submit" name="addItemButton" value="Submit">

    </form>

</div>






</body>