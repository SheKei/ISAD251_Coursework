<!DOCTYPE html>
<html lang="en">
<?php
include_once '../header.php';

IF(ISSET($_POST['submitBtn'])) //If filter button has been pressed
{
    echo "Im in here";
}
?>
<head>

</head>

<body>

<div class="container">
    <div class="col-lg-12 text-center">
        <h1>Menu </h1>
    </div>
</div>

<div class="container">
    <div class="col-lg-12 text-center">
        <h3>Filter</h3>
    </div>

    <div class="col-lg-12 text-center">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div>
                <input type="radio" name="category" value="Cake" checked="checked"> Cakes<br>
                <input type="radio" name="category" value="Drink"> Drinks<br>
                <input type="radio" name="category" value="both"> Both<br>
            </div>
            <br>
            <br>
            <div>
                <input type="checkbox" name="nutFree" value="True"> Nut Free<br>
                <input type="checkbox" name="veg" value="True"> Vegetarian<br>
                <input type="checkbox" name="vegan" value="True"> Vegan<br>
            </div>

            <input type="submit" name="submitBtn" value="Submit">
        </form>
    </div>
</div>

</body>
<?php
include_once '../footer.php';

?>