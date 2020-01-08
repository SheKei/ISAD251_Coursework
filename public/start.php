<?php
session_start();
?>

<?php


// remove table number and order id variable
session_unset();
// destroy the session
session_destroy();

?>
<!DOCTYPE html>
<html>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
    body,h1,h5 {font-family: "Century Schoolbook", sans-serif}
    body, html {height: 100%}
    .bgimg {
        background-image: url('../assets/img/cafe.jpg');
        min-height: 100%;
        background-position: center;
        background-size: cover;
    }

</style>
<body>

<div class="bgimg w3-display-container w3-text-white">
    <div class="w3-display-middle w3-jumbo" style="background-color: #FF9671">
        <p style="padding: 30px;">Teatopia</p>
    </div>


    <div class="w3-display-topleft w3-container w3-xlarge">
        <p><button  class="w3-button" style="background-color: #FF9671"><a href="./admin/adminHome.php">Admin</a></button></p>
        <p><button class="w3-button" style="background-color: #FF9671"><a href="choose_table.php">Customer</a></button></p>
    </div>
    <div class="w3-display-bottomleft w3-container">
        <p class="w3-xlarge" style="font-size: 20px;">monday - friday 10-23 | saturday 14-02</p>
        <p class="w3-large" style="font-size: 20px;">64 Zoo Lane</p>
        <p style="font-size: 20px;">powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
    </div>
</div>


</body>
</html>
