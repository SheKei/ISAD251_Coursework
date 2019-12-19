<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>

        #navBar
        {
            margin: 0 0 0 0;
            font-size: 30px;

        }



    </style>


</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark" id="navBar">
    <a class="navbar-brand" style="font-size: 25px" href="user_home.php">Home</a>

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
            <button type="button" style="font-size: 20px; color: black;" class="btn btn-warning"><a href="../start.php">Leave</a></button>
        </ul>

</nav>


</body>
</html>