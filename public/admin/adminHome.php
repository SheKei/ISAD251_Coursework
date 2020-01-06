<!DOCTYPE html>
<html lang="en">
<?php
include_once '../header_admin.php';
include_once 'adminNavBar.php';
include_once '../../srcADMIN/modelADMIN/DB_Admin.php';
?>

<head>

    <style>
        h1
        {
            font-family: "Century Schoolbook";
        }

        p{font-size: 30px;}
    </style>

</head>

<body>
        <h1 class="text-center" style="font-size: 55px; padding:30px;">WELCOME ADMIN</h1>

<?php
    $db = new DB_Admin();
    $stats = $db->getHomeReport();

    if($stats)
    {
        echo "<div class='jumbotron' style='padding: 30px;'>";
        echo "<div class='container' style='padding: 50px'>";
        echo $income = "<p>INCOME:<strong> £".$stats->getIncome()."</strong></p>";
        echo $buyCost = "<p>TOTAL COSTS:<strong> £".$stats->getCosts()."</strong></p>";
        echo $totalOrders = "<p>TOTAL ORDERS DELIVERED:<strong> ".$stats->getOrders()."</strong></p>";
        echo $totalItems = "<p>TOTAL ITEMS SOLD:<strong> ".$stats->getItems()."</strong></p>";
        $totalIncome = $stats->getIncome() - $stats->getCosts();
        echo $overallIncome ="<p>TOTAL OVERALL INCOME:<strong> £".$totalIncome."</strong></p>";
        echo "</div>";
        echo "</div>";
    }


?>





</body>
