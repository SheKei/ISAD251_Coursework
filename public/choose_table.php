<?php
include_once 'header.php';
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>



    </head>

    <body>

    <div class="container">
        <div class="col-lg-12 text-center">
            <h2>Please Select the Table You are Currently Seated at</h2>
        </div>
    </div>

    <div class="container">

        <form action="./user/user_home.php" method="post">

            <div class="row">
            <button name="tableNumber" value="01">01</button>
            </div>

        </form>

    </div>

    </body>


    </html>

<?php
include_once 'footer.php';

?>