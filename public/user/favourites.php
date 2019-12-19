<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php
include_once  'user_nav.php';
include_once '../header.php';
include_once '../../src/model/DB_Context.php';
include_once '../../src/model/favItem.php';
?>
<head>

</head>

<body>

<div class="container">
    <div class="col-lg-12 text-center">
        <h1> Favourites </h1>
    </div>
</div>

<div class="container">

    <?php

    $db = new DB_Context();
    $favouriteItems = $db->viewFavouriteItems($_SESSION['tableNum']); //Return with an array of objects favourite items

    if($favouriteItems)
    {
        foreach($favouriteItems as $fav)
        {
            $displayString = "<p><a href='viewItem.php?object=".$fav->getId()."'>".$fav->getName()."</a>- Number of Favourites: ".$fav->getNumOfLikes()."</p>";
            echo $displayString;
        }
    }

    ?>

</div>

</body>
<?php
include_once '../footer.php';

?>