<?php
include_once  'user_nav.php';
include_once '../header.php';

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <style>

            body{
                background-color: white;
            }

        </style>


    </head>

    <body>

    <div class="container">
        <div class="col-lg-12 text-center">
            <h2>Welcome! Your Table Number is <?php echo $_POST["tableNumber"] ?> </h2>
        </div>
    </div>



    </body>


    </html>

<?php
include_once '../footer.php';

?>