<!DOCTYPE html>
<html lang="en">
<?php
include_once '../header_admin.php';
include_once 'adminNavBar.php';
?>

<head>

    <script>
        function checkInput()
        {
            let sellingPrice = document.getElementById("sellPrice").value;
            let buyingPrice =document.getElementById("buyPrice").value;

            if(sellingPrice !== "")
            {
                var validInputSell = checkPrice(sellingPrice);
            }

            if(buyingPrice !== "")
            {
                var validInputBuy = checkPrice(buyingPrice);
            }

            if(validInputBuy === true && validInputSell === true)
            {
                comparePrices(sellingPrice, buyingPrice);
            }

        }

        function checkPrice(priceInput)
        {
            let valid = true;
            if(parseFloat(priceInput) < 0)
            {
                alert("PRICE MUST BE POSITIVE!");
                valid = false;
            }
            else if(priceInput === "")
            {
                alert("CANNOT BE LEFT BLANK!");
                valid = false;
            }
            else if(isNaN(priceInput) === true) //If input is not a number
            {
                alert("PRICE MUST BE A NUMBER!");
                valid = false;
            }
            return valid;
        }

        function comparePrices(sellPrice, buyPrice)
        {
            if(sellPrice < buyPrice)
            {
                alert("SELLING PRICE CANNOT BE LESS THAN BUYING PRICE!");
            }
        }

    </script>



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

<h1 style="letter-spacing: 10px; padding: 20px;" class="text-center">Add an Item</h1>
<br>


    <?php
            //If create function was not able to create item due to invalid input
            if(isset($_GET['invalid']))
            {
                echo "<p style='color: darkred; font-size: 20px;' class='text-center'><strong>ERROR: There was an issue with either/both buying price and selling price input. ITEM WAS NOT CREATED<strong></p>";
            }

    ?>

<div class="text-center" style="padding: 20px;">

    <form action = "../../srcADMIN/controllerADMIN/createItem.php" method="post">

        Item Name:
        <input type="text" name="itemName" required><br><br>

        Buying Cost: £
        <input type="text" name="buy" id="buyPrice" onchange="checkInput()" required><br><br>

        Selling Price: £
        <input type="text" name="sell" id="sellPrice" onchange='checkInput()' required><br><br>

        Current Stock Quantity:
        <input type="number" name="quantity" required><br><br>

        Minimum Restock Quantity:
        <input type="number" name="restock" required><br><br>

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

        <input class="w3-button w3-black w3-round-large" type="submit" name="addItemButton" value="SUBMIT">

    </form>

</div>

</body>