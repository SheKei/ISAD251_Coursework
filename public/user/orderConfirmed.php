<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php
include_once  'user_nav.php';
include_once '../header.php';
include_once '../../src/model/DB_Context.php';

if(isset($_POST['confirmBtn']))
{
    $db = new DB_Context();
    $db->confirmOrder($_SESSION['tableNum'], $_SESSION['id']);
}

?>
<head>

    <style>
        #confirmed
        {
            padding: 20px;
        }
    </style>

</head>

<body>

<div class="jumbotron" id="confirmed">

        <h1> Your Order has been Confirmed! </h1>
        <p>You may wish to leave this page or stay</p>

</div>

</body>
<?php
include_once '../footer.php';

?>