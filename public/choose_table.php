<?php
include_once 'header.php';
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>

        <style>

            button
            {
                padding: 10px 50px 10px 50px;
                background: #FFFFF0;
                border: 5px solid #EFDFBB;

            }

            .col-lg-3
            {
                margin: 30px 0 30px 0;
            }

            #title
            {
                font-size: 40px;
            }

        </style>


    </head>

    <body>

    <div class="container">
        <div class="col-lg-12 text-center">
            <br>
            <h2 id="title">Please Select the Table You are Currently Seated at</h2>
            <br>
        </div>
    </div>

<!--    Users select their table number which is passed into the home page to be outputted-->

    <div class="container text-center" style="font-size: 40px">

        <form action="./user/user_home.php" method="post">

            <div class="row">

                <div class="col-lg-3">
                    <button name="tableNumber" value="01">01</button>
                </div>

                <div class="col-lg-3">
                    <button name="tableNumber" value="02">02</button>
                </div>

                <div class="col-lg-3">
                    <button name="tableNumber" value="03">03</button>
                </div>

                <div class="col-lg-3">
                    <button name="tableNumber" value="03">04</button>
                </div>

            </div>

            <div class="row">

                <div class="col-lg-3">
                    <button name="tableNumber" value="05">05</button>
                </div>

                <div class="col-lg-3">
                    <button name="tableNumber" value="06">06</button>
                </div>

                <div class="col-lg-3">
                    <button name="tableNumber" value="07">07</button>
                </div>

                <div class="col-lg-3">
                    <button name="tableNumber" value="08">08</button>
                </div>

            </div>

            <div class="row">

                <div class="col-lg-3">
                    <button name="tableNumber" value="09">09</button>
                </div>

                <div class="col-lg-3">
                    <button name="tableNumber" value="10">10</button>
                </div>

                <div class="col-lg-3">
                    <button name="tableNumber" value="11">11</button>
                </div>

                <div class="col-lg-3">
                    <button name="tableNumber" value="12">12</button>
                </div>

            </div>

            <div class="row">

                <div class="col-lg-3">
                    <button name="tableNumber" value="13">13</button>
                </div>

                <div class="col-lg-3">
                    <button name="tableNumber" value="14">14</button>
                </div>

                <div class="col-lg-3">
                    <button name="tableNumber" value="15">15</button>
                </div>

                <div class="col-lg-3">
                    <button name="tableNumber" value="16">16</button>
                </div>

            </div>

            <div class="row">

                <div class="col-lg-3">
                    <button name="tableNumber" value="17">17</button>
                </div>

                <div class="col-lg-3">
                    <button name="tableNumber" value="18">18</button>
                </div>

                <div class="col-lg-3">
                    <button name="tableNumber" value="19">19</button>
                </div>

                <div class="col-lg-3">
                    <button name="tableNumber" value="20">20</button>
                </div>

            </div>

        </form>
        <br>
        <br>
    </div>

    </body>


    </html>

<?php
include_once 'footer.php';

?>