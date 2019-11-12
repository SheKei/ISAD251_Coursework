<!DOCTYPE html>
<!--
 template for nav bar from: https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_templates_startup;
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e346805cf1.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <style>
        #link {
            color: black;

            font-space: 10px;
        }

        .w3-top
        {
            background-color: #F9F871;
        }


    </style>
</head>

<body>

<!-- Navbar (sit on top) -->
<div class="w3-top" >
    <div class="w3-bar w3-white w3-card" id="myNavbar">
        <a href="#home" class="w3-bar-item w3-button w3-wide">LOGO</a>
        <!-- Right-sided navbar links -->
        <div class="w3-left w3-hide-small">

            <a href="favourites.php" class="w3-bar-item w3-button" id="link"><i class="far fa-heart">FAVORITES</i> </a>
            <a href="order_history_user.php" class="w3-bar-item w3-button" id="link"><i class="fas fa-history"> ORDER HISTORY</i></a>
            <a href="menu.php" class="w3-bar-item w3-button" id="link"><i class="fas fa-utensils">MENU</i></a>
            <a href="confirm_order.php" class="w3-bar-item w3-button" id="link"><i class="fas fa-shopping-basket"></i></a>
        </div>

</body>

