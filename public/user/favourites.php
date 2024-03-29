
<!DOCTYPE html>
<html lang="en">
<?php
include_once  'user_nav.php';
include_once '../header.php';
include_once '../../src/model/DB_Context.php';
include_once '../../src/controller/favouriteItems.php';
?>
<head>
    <style>
        h1, h2, h3{
            font-family: "Century Schoolbook", "SansSerif";
        }
    </style>

</head>

<body>

<div class="container">
    <div class="col-lg-12 text-center">
        <h1 style="font-size: 45px; padding: 20px; letter-spacing: 10px;"> Favourites </h1>
    </div>
</div>

<div class="container">

    <?php

    $db = new DB_Context();
    $favouriteItems = $db->viewFavouriteItems($_SESSION['tableNum']); //Return with an array of objects favourite items

    if($favouriteItems)
    {
        displayFavouriteItems($favouriteItems);
    }

    ?>

</div>

</body>
<?php
include_once '../footer.php';

?>