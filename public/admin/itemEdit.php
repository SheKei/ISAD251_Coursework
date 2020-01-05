<!DOCTYPE html>
<html lang="en">
<?php
include_once '../header_admin.php';
include_once 'adminNavBar.php';
include_once '../../srcADMIN/controllerADMIN/itemEditOutput.php';
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

        .text-center
        {
            font-size: 25px;
            font-family: "Century Schoolbook";
        }

    </style>

</head>

<body>

<?php

if(isset($_GET['object']))
{
    $id = $_GET['object'];

    displayFieldsToEdit($id);
}
?>





</body>