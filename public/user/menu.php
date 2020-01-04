<!DOCTYPE html>
<html lang="en">
<?php
include_once  'user_nav.php';
include_once '../header.php';
include_once '../../src/controller/menuFilter.php';

include_once '../../src/model/menuItem.php';
include_once '../../src/model/DB_Context.php';


$menuItems = ""; //Initialize return array of object

if(ISSET($_POST['submitBtn'])) //If filter button has been pressed
{
    if(isset($_POST['category']))
    {
        if($_POST['category']=="none") //If no filter option was selected
        {
            $menuItems = getAllMenuItems();
        }
    }
    else
    {
        $menuItems = filter();
    }
}
else
{
    $menuItems = getAllMenuItems();
}

?>
<head>

    <style>


    </style>

</head>

<body>

        <h1 style='font-size: 55px;' class ='text-center' >Menu </h1>


    <div class="jumbotron text-center">

        <h3 style='font-size: 30px;' class="text-center">Filter</h3>
        <br>


    <!--Layout for filter function -->

            <form style='font-size: 25px;'  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div>
                        <input type="radio" name="category" value="Cake" checked="checked"> Cakes<br>
                        <input type="radio" name="category" value="Drink"> Drinks<br>
                        <input type="radio" name="category" value="both"> Both<br>
                        <input type="radio" name="category" value="none"> NO FILTER<br>
                        </div>
                        <br>
                        <div>
                        <input type="checkbox" name="nutFree" value="True"> Nut Free<br>
                        <input type="checkbox" name="veg" value="True"> Vegetarian<br>
                        <input type="checkbox" name="vegan" value="True"> Vegan<br>
                        </div>

                        <input type="submit" name="submitBtn" value="Submit">
            </form>
    </div>


<!--Layout for menu output -->
<form action="viewItem.php" method="get">
    <?php

        if($menuItems) //If there are objects in menuItems array
        {
            displayMenuItems($menuItems);
        }

    ?>
</form>




</body>
<?php
include_once '../footer.php';

?>