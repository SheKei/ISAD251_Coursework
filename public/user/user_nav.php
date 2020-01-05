<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>

        #navBar
        {
            margin: 0 0 0 0;
            font-size: 30px;

        }
    </style>

    <script>
        function exitFunction() {

            if (confirm("WARNING: THE ORDER WILL BE CANCELLED IF YOU HAVE NOT YET CONFIRMED YOUR ORDER!\nYOU WILL NOT BE ABLE TO ACCESS YOUR ORDER ONCE YOU LEAVE!")) {
                let orderId = document.getElementById("orderId").innerText; //Get the order id
                var link = "../../src/controller/cancel.php?exitOrder=1&theOrderId="+orderId;
                location.replace(link); //Go to controller
            } else {

            }
        }
    </script>


</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark" id="navBar">
    <?php echo "<a class='navbar-brand'  style='font-size: 25px' href='user_home.php'>ORDER:<p class='text-center' id='orderId'>".$_SESSION['id']."</p></a>"?>
        <ul class="nav navbar-nav" id="links">
            <li class="nav-item">
                <a class="nav-link" href="menu.php">Menu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="favourites.php">Favourites</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="basket.php">Basket</a>
            </li>
        </ul>

        <ul class="nav navbar-nav  ml-auto">
            <button name = "leaveBtn" type="button" style="font-size: 20px; color: black;" class="btn btn-warning" onclick="exitFunction()">Leave</button>

        </ul>

</nav>


</body>
</html>